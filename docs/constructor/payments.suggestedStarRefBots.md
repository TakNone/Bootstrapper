# payments.suggestedStarRefBots

**Description** : *A list of suggested mini apps with available affiliate programs*

**Layer** : 218

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
	count : 99,
	suggested_bots : array(
		$client->starRefProgram(
			bot_id : 8385113123080436314,
			commission_permille : 43,
			duration_months : 30,
			end_date : 16,
			daily_revenue_per_user : $client->starsAmount(
				amount : -3015268641168477706,
				nanos : 10,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -3734107399455584265,
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
			id : 9155704497110478100,
			access_hash : -7145721801485142604,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 12,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dQE7mNwWl41gvDCR',
					reason : 'mzpVRXSubOHN683k',
					text : 'JPEWN1DTvR9dFLCj',
				),
			),
			bot_inline_placeholder : 'FDXdf7UhNk9vlTnZ',
			lang_code : 'l98hteU64DsXkpfF',
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
				max_id : 85,
			),
			color : $client->peerColor(
				color : 12,
				background_emoji_id : -5288679093643230646,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : 7079898374975124192,
			),
			bot_active_users : 85,
			bot_verification_icon : -1240016294970191219,
			send_paid_messages_stars : 4861930978434114545,
		),
	),
	next_offset : 'euhIlBxwA1iS6yLz',
);
```