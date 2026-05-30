# updateBotMenuButton

**Description** : *The menu button behavior for the specified bot has changed*

**Layer** : 222

```tl
updateBotMenuButton#14b85813 bot_id:long button:BotMenuButton = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot_id</mark> | [`long`](type/long) | Bot ID |
| <mark>button</mark> | [`BotMenuButton`](type/BotMenuButton) | New menu button |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotMenuButton(
	bot_id : 2730465986576210474,
	button : $client->botMenuButtonDefault(),
);
```