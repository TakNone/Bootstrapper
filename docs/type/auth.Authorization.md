# auth.Authorization

**Description** : *Object contains info on user authorization*

**Layer** : 211

```tl
auth.authorization#2ea2c0d4 flags:# setup_password_required:flags.1?true otherwise_relogin_days:flags.1?int tmp_sessions:flags.0?int future_auth_token:flags.2?bytes user:User = auth.Authorization;
auth.authorizationSignUpRequired#44747e9a flags:# terms_of_service:flags.0?help.TermsOfService = auth.Authorization;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**auth.authorization**](constructor/auth.authorization) | Contains user authorization info |
| [**auth.authorizationSignUpRequired**](constructor/auth.authorizationSignUpRequired) | An account with this phone number doesn't exist on telegram: the user has to enter basic information and sign up |