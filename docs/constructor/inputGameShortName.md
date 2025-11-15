# inputGameShortName

**Description** : *Game by short name*

**Layer** : 216

```tl
inputGameShortName#c331e80a bot_id:InputUser short_name:string = InputGame;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot_id</mark> | [`InputUser`](type/InputUser) | The bot that provides the game |
| <mark>short_name</mark> | [`string`](type/string) | The game's short name, usually obtained from a game link » |

---

## Type

[InputGame](type/InputGame)

---

## Example

```php
$inputGame = $client->inputGameShortName(
	bot_id : $client->inputUserEmpty(),
	short_name : 'ar2pASL6B58GxwyY',
);
```