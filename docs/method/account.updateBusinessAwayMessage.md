# account.updateBusinessAwayMessage

**Description** : *Set a list of Telegram Business away messages*

**Layer** : 214

```tl
account.updateBusinessAwayMessage#a26a7fa5 flags:# message:flags.0?InputBusinessAwayMessage = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **message** | [`flags.0?InputBusinessAwayMessage`](type/InputBusinessAwayMessage) | Away message configuration and contents |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->updateBusinessAwayMessage(
	message : $client->inputBusinessAwayMessage(
		offline_only : true,
		shortcut_id : 38,
		schedule : $client->businessAwayMessageScheduleAlways(),
		recipients : $client->inputBusinessRecipients(
			existing_chats : true,
			new_chats : true,
			contacts : true,
			non_contacts : true,
			exclude_selected : true,
			users : array(
				$client->inputUserEmpty(...),
				$client->inputUserSelf(...),
				$client->inputUser(...),
				$client->inputUserFromMessage(...),
			),
		),
	),
);
```