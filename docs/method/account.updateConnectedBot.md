# account.updateConnectedBot

**Description** : *Connect a business bot » to the current account, or to change the current connection settings*

**Layer** : 211

```tl
account.updateConnectedBot#66a08c7e flags:# deleted:flags.1?true rights:flags.0?BusinessBotRights bot:InputUser recipients:InputBusinessBotRecipients = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **deleted** | [`flags.1?true`](type/true) | Whether to fully disconnect the bot from the current account |
| **rights** | [`flags.0?BusinessBotRights`](type/BusinessBotRights) | NOTHING |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot to connect or disconnect |
| <mark>recipients</mark> | [`InputBusinessBotRecipients`](type/InputBusinessBotRecipients) | Configuration for the business connection |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_BUSINESS_MISSING** | `400` | The specified bot is not a business bot (the user.bot_business flag is not set) |
| **BUSINESS_RECIPIENTS_EMPTY** | `400` | You didn't set any flag in inputBusinessBotRecipients, thus the bot cannot work with any peer |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |

---

## Example

```php
$updates = $client->account->updateConnectedBot(
	deleted : true,
	rights : $client->businessBotRights(
		reply : true,
		read_messages : true,
		delete_sent_messages : true,
		delete_received_messages : true,
		edit_name : true,
		edit_bio : true,
		edit_profile_photo : true,
		edit_username : true,
		view_gifts : true,
		sell_gifts : true,
		change_gift_settings : true,
		transfer_and_upgrade_gifts : true,
		transfer_stars : true,
		manage_stories : true,
	),
	bot : $client->inputUserEmpty(),
	recipients : $client->inputBusinessBotRecipients(
		existing_chats : true,
		new_chats : true,
		contacts : true,
		non_contacts : true,
		exclude_selected : true,
		users : array(
			$client->inputUserEmpty(),
			$client->inputUserSelf(),
			$client->inputUser(
				user_id : 693142807904114948,
				access_hash : 796274386956289314,
			),
			$client->inputUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 54,
				user_id : 911747408343637480,
			),
		),
		exclude_users : array(
			$client->inputUserEmpty(),
			$client->inputUserSelf(),
			$client->inputUser(
				user_id : 905862590587875839,
				access_hash : -8464976406082979448,
			),
			$client->inputUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 85,
				user_id : 7379902185001731163,
			),
		),
	),
);
```