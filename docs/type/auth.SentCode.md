# auth.SentCode

**Description** : *Contains info on a confirmation code message sent via SMS, phone call or Telegram*

**Layer** : 211

```tl
auth.sentCode#5e002502 flags:# type:auth.SentCodeType phone_code_hash:string next_type:flags.1?auth.CodeType timeout:flags.2?int = auth.SentCode;
auth.sentCodeSuccess#2390fe44 authorization:auth.Authorization = auth.SentCode;
auth.sentCodePaymentRequired#d7cef980 store_product:string phone_code_hash:string = auth.SentCode;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**auth.sentCode**](constructor/auth.sentCode) | Contains info about a sent verification code |
| [**auth.sentCodeSuccess**](constructor/auth.sentCodeSuccess) | The user successfully authorized using future auth tokens |
| [**auth.sentCodePaymentRequired**](constructor/auth.sentCodePaymentRequired) | NOTHING |