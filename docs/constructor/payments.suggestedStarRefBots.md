# payments.suggestedStarRefBots

**Description** : *A list of suggested mini apps with available affiliate programs*

**Layer** : 216

```tl
payments.suggestedStarRefBots#b4d5d859 flags:# count:int suggested_bots:Vector<StarRefProgram> users:Vector<User> next_offset:flags.0?string = payments.SuggestedStarRefBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 82,
	suggested_bots : array(
		$client->starRefProgram(
			bot_id : 5509149913522441225,
			commission_permille : 74,
			duration_months : 19,
			end_date : 30,
			daily_revenue_per_user : $client->starsAmount(
				amount : -4159684732931079472,
				nanos : 82,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 4520896317414946477,
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
			id : 519300902064519623,
			access_hash : 6901003083838221867,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'NoRLgCxi8ra6vOMB',
					reason : '0aFQ6Cqem5zi1V7A',
					text : 'TSji1UmuRcdgIFva',
				),
			),
			bot_inline_placeholder : '9FcBGt0P2Qwk4O36',
			lang_code : '6K2Y7lHWRV9PdENg',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 71,
			color : $client->peerColor(
				color : 31,
				background_emoji_id : 6506366188510726,
			),
			profile_color : $client->peerColor(
				color : 13,
				background_emoji_id : -3078249619312655403,
			),
			bot_active_users : 88,
			bot_verification_icon : -4091860161550515559,
			send_paid_messages_stars : 6591162636021020866,
		),
	),
	next_offset : 'Z3AqcPJNO0QoKvRl',
);
```