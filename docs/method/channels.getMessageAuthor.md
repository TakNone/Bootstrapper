# channels.getMessageAuthor

**Layer** : 214

```tl
channels.getMessageAuthor#ece2a0e6 channel:InputChannel id:int = User;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | NOTHING |
| <mark>id</mark> | [`int`](type/int) | NOTHING |

---

## Result

[User](type/User)

---

## Example

```php
$user = $client->channels->getMessageAuthor(
	channel : $client->inputChannelEmpty(),
	id : 92,
);
```