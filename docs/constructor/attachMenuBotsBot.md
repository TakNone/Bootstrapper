# attachMenuBotsBot

**Description** : *Represents a bot mini app that can be launched from the attachment menu &raquo;*

**Layer** : 222

```tl
attachMenuBotsBot#93bf667f bot:AttachMenuBot users:Vector<User> = AttachMenuBotsBot;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`AttachMenuBot`](type/AttachMenuBot) | Represents a bot mini app that can be launched from the attachment menu » |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about related users and bots |

---

## Type

[AttachMenuBotsBot](type/AttachMenuBotsBot)

---

## Example

```php
$attachMenuBotsBot = $client->attachMenuBotsBot(
	bot : $client->attachMenuBot(
		inactive : true,
		has_settings : true,
		request_write_access : true,
		show_in_attach_menu : true,
		show_in_side_menu : true,
		side_menu_disclaimer_needed : true,
		bot_id : 5753449753942612334,
		short_name : 'jcKEZSJeyXarQuBk',
		peer_types : array(
			$client->attachMenuPeerTypeSameBotPM(),
			$client->attachMenuPeerTypeBotPM(),
			$client->attachMenuPeerTypePM(),
			$client->attachMenuPeerTypeChat(),
			$client->attachMenuPeerTypeBroadcast(),
		),
		icons : array(
			$client->attachMenuBotIcon(
				name : 'WrFPxGmMYhRoDOXf',
				icon : $client->documentEmpty(
					id : -4089293678454782422,
				),
				colors : array(
					$client->attachMenuBotIconColor(
						name : 'EzR5u9l7p0UDHKTq',
						color : 94,
					),
				),
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -8062379752356507530,
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
			id : -8558651841427840506,
			access_hash : -8187902954604548974,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XdW6zASswuZkMVp7',
					reason : 'eCAKJV7XOPLqlgFc',
					text : 'g2aV8GOE6xBjPL9Y',
				),
			),
			bot_inline_placeholder : 'XOqcPb1YvDuT4l7o',
			lang_code : 'ZJhSVXEkjT2e9z1A',
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
				color : 69,
				background_emoji_id : 8564081687456443482,
			),
			profile_color : $client->peerColor(
				color : 91,
				background_emoji_id : 4072556622052072954,
			),
			bot_active_users : 6,
			bot_verification_icon : -8095421264594810961,
			send_paid_messages_stars : 7993066665830440405,
		),
	),
);
```