# auth.codeTypeFlashCall

**Description** : *The next time, the authentication code will be delivered via an immediately canceled incoming call*

**Layer** : 211

```tl
auth.codeTypeFlashCall#226ccefb = auth.CodeType;
```

---

## Type

[auth.CodeType](type/auth.CodeType)

---

## Example

```php
$authCodeType = $client->auth->codeTypeFlashCall();
```