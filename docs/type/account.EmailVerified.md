# account.EmailVerified

**Description** : *Email verification status*

**Layer** : 211

```tl
account.emailVerified#2b96cd1b email:string = account.EmailVerified;
account.emailVerifiedLogin#e1bb0d61 email:string sent_code:auth.SentCode = account.EmailVerified;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**account.emailVerified**](constructor/account.emailVerified) | The email was verified correctly |
| [**account.emailVerifiedLogin**](constructor/account.emailVerifiedLogin) | The email was verified correctly, and a login code was just sent to it |