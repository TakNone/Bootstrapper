# bots.getBotRecommendations

**Layer** : 211

```tl
bots.getBotRecommendations#a1b70815 bot:InputUser = users.Users;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | NOTHING |

---

## Result

[users.Users](type/users.Users)

---

## Example

```php
$usersUsers = $client->bots->getBotRecommendations(
	bot : $client->inputUserEmpty(),
);
```