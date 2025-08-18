# inputBusinessAwayMessage

**Description** : *Describes a Telegram Business away message, automatically sent to users writing to us when we&#039;re offline, during closing hours, while we&#039;re on vacation, or in some other custom time period when we cannot immediately answer to the user*

**Layer** : 211

```tl
inputBusinessAwayMessage#832175e0 flags:# offline_only:flags.0?true shortcut_id:int schedule:BusinessAwayMessageSchedule recipients:InputBusinessRecipients = InputBusinessAwayMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **offline_only** | [`flags.0?true`](type/true) | If set, the messages will not be sent if the account was online in the last 10 minutes |
| <mark>shortcut_id</mark> | [`int`](type/int) | ID of a quick reply shorcut, containing the away messages to send, see here » for more info |
| <mark>schedule</mark> | [`BusinessAwayMessageSchedule`](type/BusinessAwayMessageSchedule) | Specifies when should the away messages be sent |
| <mark>recipients</mark> | [`InputBusinessRecipients`](type/InputBusinessRecipients) | Allowed recipients for the away messages |

---

## Type

[InputBusinessAwayMessage](type/InputBusinessAwayMessage)

---

## Example

```php
$inputBusinessAwayMessage = $client->inputBusinessAwayMessage(
	offline_only : true,
	shortcut_id : 46,
	schedule : $client->businessAwayMessageScheduleAlways(),
	recipients : $client->inputBusinessRecipients(
		existing_chats : true,
		new_chats : true,
		contacts : true,
		non_contacts : true,
		exclude_selected : true,
		users : array(
			$client->inputUserEmpty(),
			$client->inputUserSelf(),
			$client->inputUser(
				user_id : 391334297359967853,
				access_hash : -738045854119807337,
			),
			$client->inputUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 50,
				user_id : 1198164216456776066,
			),
		),
	),
);
```