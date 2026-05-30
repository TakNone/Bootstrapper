# bots.accessSettings

**Layer** : 225

```tl
bots.accessSettings#dd1fbf93 flags:# restricted:flags.0?true add_users:flags.1?Vector<User> = bots.AccessSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **restricted** | [`flags.0?true`](type/true) | NOTHING |
| **add_users** | [`flags.1?Vector<User>`](type/User) | NOTHING |

---

## Type

[bots.AccessSettings](type/bots.AccessSettings)

---

## Example

```php
$botsAccessSettings = $client->bots->accessSettings(
	restricted : true,
	add_users : array(
		$client->userEmpty(
			id : 2287065614863352600,
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
			id : -4720846940663699746,
			access_hash : -1241683321841094219,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 64,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'f4B18wca3T2WLdoH',
					reason : 'irw7XJYEmqlpLSOv',
					text : 'D1uhMGtVfQUXzm6i',
				),
			),
			bot_inline_placeholder : 'yixg29VU0HJ1XIzK',
			lang_code : 'COKN3wT7aRiVhepQ',
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
				max_id : 45,
			),
			color : $client->peerColor(
				color : 11,
				background_emoji_id : 1866737295943906754,
			),
			profile_color : $client->peerColor(
				color : 81,
				background_emoji_id : -687288021280506240,
			),
			bot_active_users : 19,
			bot_verification_icon : 8025491704146770165,
			send_paid_messages_stars : 7942485892117863928,
		),
	),
);
```