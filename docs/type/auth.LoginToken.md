# auth.LoginToken

**Description** : *Login token (for QR code login)*

**Layer** : 211

```tl
auth.loginToken#629f1980 expires:int token:bytes = auth.LoginToken;
auth.loginTokenMigrateTo#68e9916 dc_id:int token:bytes = auth.LoginToken;
auth.loginTokenSuccess#390d5c5e authorization:auth.Authorization = auth.LoginToken;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**auth.loginToken**](constructor/auth.loginToken) | Login token (for QR code login) |
| [**auth.loginTokenMigrateTo**](constructor/auth.loginTokenMigrateTo) | Repeat the query to the specified DC |
| [**auth.loginTokenSuccess**](constructor/auth.loginTokenSuccess) | Login via token (QR code) succeeded! |