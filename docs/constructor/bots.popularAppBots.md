# bots.popularAppBots

**Description** : *Popular Main Mini Apps, to be used in the apps tab of global search &raquo;*

**Layer** : 218

```tl
bots.popularAppBots#1991b13b flags:# next_offset:flags.0?string users:Vector<User> = bots.PopularAppBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **next_offset** | [`flags.0?string`](type/string) | Offset for pagination |
| <mark>users</mark> | [`Vector<User>`](type/User) | The bots associated to each Main Mini App, see here » for more info |

---

## Type

[bots.PopularAppBots](type/bots.PopularAppBots)

---

## Example

```php
$botsPopularAppBots = $client->bots->popularAppBots(
	next_offset : '0FkpwZGC9dx83yT2',
	users : array(
		$client->userEmpty(
			id : 188671087094527308,
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
			id : -8992693838188226318,
			access_hash : 4263535448758870037,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'q3JtCPZE9UgDGLNS',
					reason : 'DopfXYPHTbiGvOrL',
					text : '0gwqOTk1Ms6yo8Qp',
				),
			),
			bot_inline_placeholder : 'd3iZLxWfSgmCjuwl',
			lang_code : 'CyhFvGUxnDEAdSLK',
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
				max_id : 14,
			),
			color : $client->peerColor(
				color : 37,
				background_emoji_id : -1334821301176530554,
			),
			profile_color : $client->peerColor(
				color : 44,
				background_emoji_id : 6217927105361512577,
			),
			bot_active_users : 29,
			bot_verification_icon : -7925400308435755782,
			send_paid_messages_stars : 7219159865962001286,
		),
	),
);
```