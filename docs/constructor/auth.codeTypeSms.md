# auth.codeTypeSms

**Description** : *The next time, the authentication code will be delivered via an immediately canceled incoming call*

**Layer** : 211

```tl
auth.codeTypeSms#72a3158c = auth.CodeType;
```

---

## Type

[auth.CodeType](type/auth.CodeType)

---

## Example

```php
$authCodeType = $client->auth->codeTypeSms();
```