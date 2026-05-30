# account.connectedBots

**Description** : *Info about currently connected business bots*

**Layer** : 222

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
			bot_id : -5961462233452445396,
			recipients : $client->businessBotRecipients(
				existing_chats : true,
				new_chats : true,
				contacts : true,
				non_contacts : true,
				exclude_selected : true,
				users : array(59212601926990615),
				exclude_users : array(8435002076284448633),
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
			id : 6359400947605853646,
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
			id : 5668279264113187267,
			access_hash : -4420974204094950494,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 23,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6ygSK2cYb3JtCE18',
					reason : 'zsgeA8Zo2wc70jNa',
					text : 'GumApiMgsNfD5ZBj',
				),
			),
			bot_inline_placeholder : '7lU6kHoWZ8m4zNa2',
			lang_code : 'UYbhvxfOwrNDBAeL',
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
				max_id : 8,
			),
			color : $client->peerColor(
				color : 24,
				background_emoji_id : -2053703221939000028,
			),
			profile_color : $client->peerColor(
				color : 75,
				background_emoji_id : -7171497699238720089,
			),
			bot_active_users : 66,
			bot_verification_icon : 619917218685583486,
			send_paid_messages_stars : 3903637831761371082,
		),
	),
);
```