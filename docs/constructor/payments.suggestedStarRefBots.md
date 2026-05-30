# payments.suggestedStarRefBots

**Description** : *A list of suggested mini apps with available affiliate programs*

**Layer** : 225

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
	count : 29,
	suggested_bots : array(
		$client->starRefProgram(
			bot_id : 5297290143178059312,
			commission_permille : 33,
			duration_months : 39,
			end_date : 82,
			daily_revenue_per_user : $client->starsAmount(
				amount : -3568552136834305077,
				nanos : 96,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -3635738798629214846,
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
			id : -692621999502357529,
			access_hash : -8291481816980787940,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 29,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'l38QyqWLZrtKaI19',
					reason : 'rmxCTn0X6eGSoQMD',
					text : 'umMD3q2lL79IXgyW',
				),
			),
			bot_inline_placeholder : 'xl9Ruk2T6YAX4OiI',
			lang_code : '4DIjU3P2EOom6LZH',
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
				max_id : 84,
			),
			color : $client->peerColor(
				color : 88,
				background_emoji_id : -7994107788196916098,
			),
			profile_color : $client->peerColor(
				color : 17,
				background_emoji_id : 7909082340248475121,
			),
			bot_active_users : 43,
			bot_verification_icon : -6220644021726821850,
			send_paid_messages_stars : -1448204769429128081,
		),
	),
	next_offset : 'T1tb42PmO7LnjweD',
);
```