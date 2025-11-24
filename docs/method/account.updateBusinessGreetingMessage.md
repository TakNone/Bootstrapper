# account.updateBusinessGreetingMessage

**Description** : *Set a list of Telegram Business greeting messages*

**Layer** : 218

```tl
account.updateBusinessGreetingMessage#66cdafc4 flags:# message:flags.0?InputBusinessGreetingMessage = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **message** | [`flags.0?InputBusinessGreetingMessage`](type/InputBusinessGreetingMessage) | Greeting message configuration and contents |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->updateBusinessGreetingMessage(
	message : $client->inputBusinessGreetingMessage(
		shortcut_id : 52,
		recipients : $client->inputBusinessRecipients(
			existing_chats : true,
			new_chats : true,
			contacts : true,
			non_contacts : true,
			exclude_selected : true,
			users : array($client->get_input_user(user : '@TakNone')),
		),
		no_activity_days : 5,
	),
);
```