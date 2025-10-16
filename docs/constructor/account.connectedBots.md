# account.connectedBots

**Description** : *Info about currently connected business bots*

**Layer** : 216

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
			bot_id : 4614460167206948652,
			recipients : $client->businessBotRecipients(
				existing_chats : true,
				new_chats : true,
				contacts : true,
				non_contacts : true,
				exclude_selected : true,
				users : array(-6844466667041773443),
				exclude_users : array(1118208279107771001),
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
		),
	),
	users : array(
		$client->userEmpty(
			id : -2347464918546147117,
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
			id : 6612338672757143089,
			access_hash : -1002222438716071586,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 86,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7KECuB8WfLmawrT4',
					reason : 'Nj8fFnD0Y934IwEr',
					text : 'rUYZS9C2TJD84FEa',
				),
			),
			bot_inline_placeholder : 'gEctNAsf6hPuxavI',
			lang_code : 'tGdpIcojnNFaOsvR',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 73,
			color : $client->peerColor(
				color : 92,
				background_emoji_id : 7078045838438878900,
			),
			profile_color : $client->peerColor(
				color : 76,
				background_emoji_id : 3634409130194339511,
			),
			bot_active_users : 13,
			bot_verification_icon : 2461391148294664750,
			send_paid_messages_stars : 6855786934691972915,
		),
	),
);
```