# auth.codeTypeMissedCall

**Description** : *The next time, the authentication code will be delivered via an immediately canceled incoming call, handled manually by the user*

**Layer** : 211

```tl
auth.codeTypeMissedCall#d61ad6ee = auth.CodeType;
```

---

## Type

[auth.CodeType](type/auth.CodeType)

---

## Example

```php
$authCodeType = $client->auth->codeTypeMissedCall();
```