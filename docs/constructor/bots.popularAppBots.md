# bots.popularAppBots

**Description** : *Popular Main Mini Apps, to be used in the apps tab of global search &raquo;*

**Layer** : 227

```tl
bots.popularAppBots#1991b13b flags:# next_offset:flags.0?string users:Vector<User> = bots.PopularAppBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **next_offset** | [`flags.0?string`](type/string) | Offset for pagination |
| <mark>users</mark> | [`Vector<User>`](type/User) | The bots associated to each Main Mini App, see here » for more info |

---

## Type

[bots.PopularAppBots](type/bots.PopularAppBots)

---

## Example

```php
$botsPopularAppBots = $client->bots->popularAppBots(
	next_offset : '2lLd3oypZFCH0nvW',
	users : array(
		$client->userEmpty(
			id : -2555969408777002802,
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
			id : 2021553794359071333,
			access_hash : -5244001018868013914,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ovqaS3UYJDxncdM9',
					reason : 'AkyfL39cO2vSVarg',
					text : 'DjF8SV9E0LAgG4Ob',
				),
			),
			bot_inline_placeholder : '9m5wnrc0jx72LVEg',
			lang_code : '6CN4QM2bBs9vHAfh',
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
				max_id : 92,
			),
			color : $client->peerColor(
				color : 78,
				background_emoji_id : -179789092572463422,
			),
			profile_color : $client->peerColor(
				color : 97,
				background_emoji_id : 5825225420042342753,
			),
			bot_active_users : 36,
			bot_verification_icon : -1285335367626270260,
			send_paid_messages_stars : -2958662541941522301,
		),
	),
);
```