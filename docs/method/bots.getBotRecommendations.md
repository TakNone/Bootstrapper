# bots.getBotRecommendations

**Description** : *Obtain a list of similarly themed bots, selected based on similarities in their subscriber bases, see here &raquo; for more info*

**Layer** : 218

```tl
bots.getBotRecommendations#a1b70815 bot:InputUser = users.Users;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The method will return bots related to the passed bot |

---

## Result

[users.Users](type/users.Users)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |

---

## Example

```php
$usersUsers = $client->bots->getBotRecommendations(
	bot : $client->get_input_user(user : '@TakNone'),
);
```