# updateBotCommands

**Description** : *The command set of a certain bot in a certain chat has changed*

**Layer** : 214

```tl
updateBotCommands#4d712f2e peer:Peer bot_id:long commands:Vector<BotCommand> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | The affected chat |
| <mark>bot_id</mark> | [`long`](type/long) | ID of the bot that changed its command set |
| <mark>commands</mark> | [`Vector<BotCommand>`](type/BotCommand) | New bot commands |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotCommands(
	peer : $client->peerUser(
		user_id : -5051831112332969005,
	),
	bot_id : 7625471227527748861,
	commands : array(
		$client->botCommand(
			command : 'wLCsHYA9rPMXzKSJ',
			description : 'TjwE1XV0Faq2zhKm',
		),
	),
);
```