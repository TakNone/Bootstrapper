# securePlainEmail

**Description** : *Email address to use in telegram passport: it must be verified, first »*

**Layer** : 211

```tl
securePlainEmail#21ec5a5f email:string = SecurePlainData;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>email</mark> | [`string`](type/string) | Email address |

---

## Type

[SecurePlainData](type/SecurePlainData)

---

## Example

```php
$securePlainData = $client->securePlainEmail(
	email : 'reply@liveproto.dev',
);
```