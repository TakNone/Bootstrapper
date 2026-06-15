# payments.suggestedStarRefBots

**Description** : *A list of suggested mini apps with available affiliate programs*

**Layer** : 227

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
	count : 40,
	suggested_bots : array(
		$client->starRefProgram(
			bot_id : 3672161836956888705,
			commission_permille : 7,
			duration_months : 7,
			end_date : 85,
			daily_revenue_per_user : $client->starsAmount(
				amount : 6979347125366622006,
				nanos : 87,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 6371393999933218592,
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
			id : -5282775189538534226,
			access_hash : 3302480770286987301,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 80,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CSKsRmVgiLUl59uJ',
					reason : '7upYUybVPgvBWE94',
					text : 'RKDAOH1Bkyc5UW4L',
				),
			),
			bot_inline_placeholder : 'tD0sbdx9PAOVrUKc',
			lang_code : 'Mr846KhtsoeY9RfV',
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
				max_id : 81,
			),
			color : $client->peerColor(
				color : 69,
				background_emoji_id : 2400931128365004594,
			),
			profile_color : $client->peerColor(
				color : 1,
				background_emoji_id : -1985509379294171731,
			),
			bot_active_users : 42,
			bot_verification_icon : -4127121453003887543,
			send_paid_messages_stars : 3774529837105125444,
		),
	),
	next_offset : 'LZQAUBOS0Kdwe9WM',
);
```