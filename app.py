from flask import Flask, request, render_template, redirect, url_for, session
from flask_sqlalchemy import SQLAlchemy
import graphene
from graphene_sqlalchemy import SQLAlchemyObjectType, SQLAlchemyConnectionField
from flask_graphql import GraphQLView

app = Flask(__name__)
app.secret_key = "healthiswealth"
app.config['SQLALCHEMY_DATABASE_URI'] = 'postgres://qepnpscgacacmr:d338fb6ef24db3eed89c7a4200ac74e8cb5c1ffd22bf8e26194eb684c6b8e33d@ec2-52-21-252-142.compute-1.amazonaws.com:5432/ddo160cbfi69qt'
app.config['SQLALCHEMY_COMMIT_ON_TEARDOWN'] = True
app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = True
db = SQLAlchemy(app)

#Model
class Registration(db.Model):
    __tablename__ = 'Registration'

    Username = db.Column(db.String(256), primary_key=True)
    Password = db.Column(db.String(256))
    Email = db.Column(db.String(256))

    def __repr__(self):
        return '<Registration %r>' % self.Username

class UserAccount(db.Model):
    __tablename__ = 'UserAccount'

    Username = db.Column(db.String(256), primary_key=True)
    Height = db.Column(db.Float)
    Weight = db.Column(db.Float)
    BMI = db.Column(db.Float)

    def __repr__(self):
        return '< UserAccount %r>' % self.Username

#Schema Objects
class RegistrationObject(SQLAlchemyObjectType):
    class Meta:
        model = Registration
        interfaces = (graphene.relay.Node, )

class UserAccountObject(SQLAlchemyObjectType):
    class Meta:
        model = UserAccount
        interfaces = (graphene.relay.Node, )

class Query(graphene.ObjectType):
    node = graphene.relay.Node.Field()
    all_registration = SQLAlchemyConnectionField(RegistrationObject)
    all_userAccount = SQLAlchemyConnectionField(UserAccountObject)

class CreateRegistration(graphene.Mutation):
    class Arguments:
        Username = graphene.String(required=True)
        Password = graphene.String(required=True)
        Email = graphene.String(required=True)

    registration = graphene.Field(lambda: RegistrationObject)

    def mutate(self, info, Username, Password, Email):
        registration = Registration(Username=Username, Password=Password, Email=Email)

        db.session.add(registration)
        db.session.commit()

        return CreateRegistration(registration=registration)

class Mutation(graphene.ObjectType):
    create_registration = CreateRegistration.Field()

schema = graphene.Schema(query=Query, mutation=Mutation)

#Routes
@app.route('/')
def index():
    return render_template('index.html')

@app.route('/login', methods=['GET','POST'])
def login():
    if request.method == 'POST':
        username = request.form['username']
        password = request.form['password']
        # session["user"] = username
        return username, password

    else:
        return render_template('login.html')

@app.route('/register', methods=['GET','POST'])
def register():
    if request.method == 'POST':
        pass
    else:
        return render_template('register.html')

@app.route('/profile')
def profile():
    if "user" in session:
        user = session["user"]
        return render_template('profile.html')
    else:
        redirect(url_for("/"))

app.add_url_rule(
    '/graphql',
    view_func=GraphQLView.as_view(
        'graphql',
        schema=schema,
        graphiql=True # for having the GraphiQL interface
    )
)

if __name__ == '__main__':
    app.run(debug=True)