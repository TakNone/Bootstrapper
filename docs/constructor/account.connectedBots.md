# account.connectedBots

**Description** : *Info about currently connected business bots*

**Layer** : 233

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
			bot_id : 2869340328655927721,
			recipients : $client->businessBotRecipients(
				existing_chats : true,
				new_chats : true,
				contacts : true,
				non_contacts : true,
				exclude_selected : true,
				users : array(-1837407426334564609),
				exclude_users : array(-3921827158230678952),
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
			device : 'Iks1N7uMGXDB8y5n',
			date : 13,
			location : 'YUml7JAbgfjw6WPd',
		),
	),
	users : array(
		$client->userEmpty(
			id : 6400234926088697589,
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
			bot_forum_sidebar : true,
			id : -317584552805723731,
			access_hash : 7305462461464404273,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 88,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '84B5FC2Wftq3YTkU',
					reason : 'TxA35FvJOfIodREU',
					text : '78uWJpYBVKzODAMi',
				),
			),
			bot_inline_placeholder : 'CxKZl5JhQsEubpRc',
			lang_code : 'EDlzVjuhcJRLeUYi',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 4,
			),
			color : $client->peerColor(
				color : 11,
				background_emoji_id : -6645985652348385214,
			),
			profile_color : $client->peerColor(
				color : 44,
				background_emoji_id : 6922835414015823887,
			),
			bot_active_users : 32,
			bot_verification_icon : 1838648519938447051,
			send_paid_messages_stars : 7884429749678900678,
			linked_community_id : 8429119548432269018,
		),
	),
);
```