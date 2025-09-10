# payments.suggestedStarRefBots

**Description** : *A list of suggested mini apps with available affiliate programs*

**Layer** : 214

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
	count : 92,
	suggested_bots : array(
		$client->starRefProgram(
			bot_id : -4467483462454521747,
			commission_permille : 18,
			duration_months : 25,
			end_date : 19,
			daily_revenue_per_user : $client->starsAmount(
				amount : -7557030179111603353,
				nanos : 70,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 6844711406065716480,
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
			id : -5498615842796095737,
			access_hash : 3631409020818807784,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 27,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Uh7v9x4XgOfcIdJF',
					reason : 'ECRKJjdB8Y9LbMfI',
					text : 'IvJx2Ob6Uf3zdh7g',
				),
			),
			bot_inline_placeholder : 'osmqdf6vFAaLz8Dh',
			lang_code : '964GYxqn0F1I7LkJ',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 21,
			color : $client->peerColor(
				color : 70,
				background_emoji_id : 7988588057149893638,
			),
			profile_color : $client->peerColor(
				color : 27,
				background_emoji_id : 6470098697991140466,
			),
			bot_active_users : 48,
			bot_verification_icon : 6731867972146982071,
			send_paid_messages_stars : 8020323826559786268,
		),
	),
	next_offset : 'nq5S8ygFNoHEPDUK',
);
```