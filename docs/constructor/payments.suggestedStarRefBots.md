# payments.suggestedStarRefBots

**Description** : *A list of suggested mini apps with available affiliate programs*

**Layer** : 211

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
	count : 73,
	suggested_bots : array(
		$client->starRefProgram(
			bot_id : -6178395141927224162,
			commission_permille : 78,
			duration_months : 84,
			end_date : 55,
			daily_revenue_per_user : $client->starsAmount(
				amount : 3932444227279890385,
				nanos : 23,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -1706187977632802702,
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
			id : 1203971471060336332,
			access_hash : -5300447087502701755,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'FrIkS6Z8Yxmy1AVe',
					reason : '1lKRQvVUu74djP3Z',
					text : 'A128wNRcjdKTtnBm',
				),
			),
			bot_inline_placeholder : 'cKPZOqBpNmX0QHwh',
			lang_code : 'EnqLxjUz6VbRMOcy',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 38,
			color : $client->peerColor(
				color : 86,
				background_emoji_id : -3158150018751367635,
			),
			profile_color : $client->peerColor(
				color : 75,
				background_emoji_id : 8050113581606226765,
			),
			bot_active_users : 70,
			bot_verification_icon : -3943105949620736773,
			send_paid_messages_stars : 8741980967514569320,
		),
	),
	next_offset : 'nXRmTWrP31JEe6kj',
);
```