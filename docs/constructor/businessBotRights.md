# businessBotRights

**Description** : *Business bot rights*

**Layer** : 216

```tl
businessBotRights#a0624cf7 flags:# reply:flags.0?true read_messages:flags.1?true delete_sent_messages:flags.2?true delete_received_messages:flags.3?true edit_name:flags.4?true edit_bio:flags.5?true edit_profile_photo:flags.6?true edit_username:flags.7?true view_gifts:flags.8?true sell_gifts:flags.9?true change_gift_settings:flags.10?true transfer_and_upgrade_gifts:flags.11?true transfer_stars:flags.12?true manage_stories:flags.13?true = BusinessBotRights;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **reply** | [`flags.0?true`](type/true) | Whether the bot can send and edit messages in private chats that had incoming messages in the last 24 hours |
| **read_messages** | [`flags.1?true`](type/true) | Whether the bot can mark incoming private messages as read |
| **delete_sent_messages** | [`flags.2?true`](type/true) | Whether the bot can delete messages sent by the bot |
| **delete_received_messages** | [`flags.3?true`](type/true) | Whether the bot can delete received private messages in managed chats |
| **edit_name** | [`flags.4?true`](type/true) | Whether the bot can edit the first and last name of the business account |
| **edit_bio** | [`flags.5?true`](type/true) | Whether the bot can edit the bio of the business account |
| **edit_profile_photo** | [`flags.6?true`](type/true) | Whether the bot can edit the profile photo of the business account |
| **edit_username** | [`flags.7?true`](type/true) | Whether the bot can edit the username of the business account |
| **view_gifts** | [`flags.8?true`](type/true) | Whether the bot can view gifts and the amount of Telegram Stars owned by the business account |
| **sell_gifts** | [`flags.9?true`](type/true) | Whether the bot can convert regular gifts owned by the business account to Telegram Stars |
| **change_gift_settings** | [`flags.10?true`](type/true) | Whether the bot can change the privacy settings pertaining to gifts for the business account |
| **transfer_and_upgrade_gifts** | [`flags.11?true`](type/true) | Whether the bot can transfer and upgrade gifts owned by the business account |
| **transfer_stars** | [`flags.12?true`](type/true) | Whether the bot can transfer Telegram Stars received by the business account to its own account, or use them to upgrade and transfer gifts |
| **manage_stories** | [`flags.13?true`](type/true) | Whether the bot can post, edit and delete stories on behalf of the business account |

---

## Type

[BusinessBotRights](type/BusinessBotRights)

---

## Example

```php
$businessBotRights = $client->businessBotRights(
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
);
```