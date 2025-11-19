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
	count : 25,
	suggested_bots : array(
		$client->starRefProgram(
			bot_id : 5198940058568014186,
			commission_permille : 41,
			duration_months : 95,
			end_date : 81,
			daily_revenue_per_user : $client->starsAmount(
				amount : -7689091602171082562,
				nanos : 36,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -4572653244073236997,
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
			id : 7714467072752659919,
			access_hash : -7355582052071613603,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 94,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'TuwXoIAq6ZKS8GhO',
					reason : 'WmlatQCKs3R56vTi',
					text : 'uNTXUQ3By8HvodCg',
				),
			),
			bot_inline_placeholder : '9aNV0iIhCBQs12Gg',
			lang_code : 'qNT7C39sP1EBgv8K',
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
				max_id : 22,
			),
			color : $client->peerColor(
				color : 31,
				background_emoji_id : 4162525749560231632,
			),
			profile_color : $client->peerColor(
				color : 100,
				background_emoji_id : 4218350419645660590,
			),
			bot_active_users : 83,
			bot_verification_icon : 694152585637254478,
			send_paid_messages_stars : -2923084740289775650,
		),
	),
	next_offset : 'NVmrcBt2w1ETJFbY',
);
```