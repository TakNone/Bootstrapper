# inputBusinessGreetingMessage

**Description** : *Describes a Telegram Business greeting, automatically sent to new users writing to us in private for the first time, or after a certain inactivity period*

**Layer** : 216

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
	shortcut_id : 64,
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
				user_id : 7787214676967105280,
				access_hash : -2943459312010730788,
			),
			$client->inputUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 82,
				user_id : -4658435200295549782,
			),
		),
	),
	no_activity_days : 79,
);
```