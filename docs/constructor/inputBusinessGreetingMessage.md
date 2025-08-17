# inputBusinessGreetingMessage

**Description** : *Describes a Telegram Business greeting, automatically sent to new users writing to us in private for the first time, or after a certain inactivity period*

**Layer** : 211

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
	shortcut_id : 11,
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
				user_id : 7672858221066906773,
				access_hash : 3207096744651457526,
			),
			$client->inputUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 48,
				user_id : -3697671698462887217,
			),
		),
	),
	no_activity_days : 79,
);
```