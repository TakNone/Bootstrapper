# payments.suggestedStarRefBots

**Description** : *A list of suggested mini apps with available affiliate programs*

**Layer** : 222

```tl
payments.suggestedStarRefBots#b4d5d859 flags:# count:int suggested_bots:Vector<StarRefProgram> users:Vector<User> next_offset:flags.0?string = payments.SuggestedStarRefBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results (for pagination) |
| <mark>suggested_bots</mark> | [`Vector<StarRefProgram>`](type/StarRefProgram) | Suggested affiliate programs (full or partial list to be fetched using pagination) |
| <mark>users</mark> | [`Vector<User>`](type/User) | Peers mentioned in suggested_bots |
| **next_offset** | [`flags.0?string`](type/string) | Next offset for pagination |

---

## Type

[payments.SuggestedStarRefBots](type/payments.SuggestedStarRefBots)

---

## Example

```php
$paymentsSuggestedStarRefBots = $client->payments->suggestedStarRefBots(
	count : 95,
	suggested_bots : array(
		$client->starRefProgram(
			bot_id : -5703151096508151480,
			commission_permille : 31,
			duration_months : 66,
			end_date : 26,
			daily_revenue_per_user : $client->starsAmount(
				amount : -7371060298719791935,
				nanos : 47,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -3346057280564709847,
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
			id : -7784949376319929694,
			access_hash : -649447699244964046,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 15,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7JdwQqi2U94r1cPG',
					reason : 'u12qwZWPkH3s7M58',
					text : 'ILA95uOUWaVXni2p',
				),
			),
			bot_inline_placeholder : 'YSgKvbdMfV28DIan',
			lang_code : 'E8PioMrh12gFLmbC',
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
				max_id : 76,
			),
			color : $client->peerColor(
				color : 20,
				background_emoji_id : -5861716016818209394,
			),
			profile_color : $client->peerColor(
				color : 62,
				background_emoji_id : -20238529850190853,
			),
			bot_active_users : 92,
			bot_verification_icon : 766943924089795589,
			send_paid_messages_stars : 1822381253092245331,
		),
	),
	next_offset : 'ZuYtEsPWHgnbGIOF',
);
```