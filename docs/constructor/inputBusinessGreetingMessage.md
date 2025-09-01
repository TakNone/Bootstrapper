# inputBusinessGreetingMessage

**Description** : *Describes a Telegram Business greeting, automatically sent to new users writing to us in private for the first time, or after a certain inactivity period*

**Layer** : 214

```tl
inputBusinessGreetingMessage#194cb3b shortcut_id:int recipients:InputBusinessRecipients no_activity_days:int = InputBusinessGreetingMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>shortcut_id</mark> | [`int`](type/int) | ID of a quick reply shorcut, containing the greeting messages to send, see here » for more info |
| <mark>recipients</mark> | [`InputBusinessRecipients`](type/InputBusinessRecipients) | Allowed recipients for the greeting messages |
| <mark>no_activity_days</mark> | [`int`](type/int) | The number of days after which a private chat will be considered as inactive; currently, must be one of 7, 14, 21, or 28 |

---

## Type

[InputBusinessGreetingMessage](type/InputBusinessGreetingMessage)

---

## Example

```php
$inputBusinessGreetingMessage = $client->inputBusinessGreetingMessage(
	shortcut_id : 36,
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
				user_id : -6141707181544926678,
				access_hash : -2601668192307292032,
			),
			$client->inputUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 40,
				user_id : -9051995773021831617,
			),
		),
	),
	no_activity_days : 19,
);
```