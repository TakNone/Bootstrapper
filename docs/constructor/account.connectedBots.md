# account.connectedBots

**Description** : *Info about currently connected business bots*

**Layer** : 227

```tl
account.connectedBots#17d7f87b connected_bots:Vector<ConnectedBot> users:Vector<User> = account.ConnectedBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>connected_bots</mark> | [`Vector<ConnectedBot>`](type/ConnectedBot) | Info about the connected bots |
| <mark>users</mark> | [`Vector<User>`](type/User) | Bot information |

---

## Type

[account.ConnectedBots](type/account.ConnectedBots)

---

## Example

```php
$accountConnectedBots = $client->account->connectedBots(
	connected_bots : array(
		$client->connectedBot(
			bot_id : -6545817695997721352,
			recipients : $client->businessBotRecipients(
				existing_chats : true,
				new_chats : true,
				contacts : true,
				non_contacts : true,
				exclude_selected : true,
				users : array(2865236336827093004),
				exclude_users : array(7687160166765453324),
			),
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
			device : 'mVfGLbFUOWrx4kZY',
			date : 79,
			location : 'ClQ2hOWVvs1DxRNt',
		),
	),
	users : array(
		$client->userEmpty(
			id : 506403816376552491,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			id : 9042155016814231585,
			access_hash : 7085362345639063317,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 97,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'TarWGpDN0wy65Og8',
					reason : 'nXEj0bf8O3aRFNip',
					text : '81VLZjv9CpIcb75h',
				),
			),
			bot_inline_placeholder : 'zBjQOUn5buSIRFEX',
			lang_code : 'W6fMNDzmjphQJyLn',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 78,
			),
			color : $client->peerColor(
				color : 58,
				background_emoji_id : 5575990878225529187,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -8635394632744636721,
			),
			bot_active_users : 35,
			bot_verification_icon : 8164978027071811516,
			send_paid_messages_stars : 4807072098246244936,
		),
	),
);
```