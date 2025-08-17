# account.setContactSignUpNotification

**Description** : *Toggle contact sign up notifications*

**Layer** : 211

```tl
account.setContactSignUpNotification#cff43f61 silent:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>silent</mark> | [`Bool`](type/Bool) | Whether to disable contact sign up notifications |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->setContactSignUpNotification(
	silent : $client->boolFalse(),
);
```