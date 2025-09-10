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
	count : 76,
	suggested_bots : array(
		$client->starRefProgram(
			bot_id : -1207177069640276779,
			commission_permille : 87,
			duration_months : 22,
			end_date : 22,
			daily_revenue_per_user : $client->starsAmount(
				amount : 7482979945601983546,
				nanos : 35,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -8427909520934253927,
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
			id : -5633266537774851014,
			access_hash : 3237165719813227925,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 12,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8XduEr2FYPTQOCmI',
					reason : 'Bp2j6b5AraMZY7DP',
					text : '9stlcQdkqCIV1ZXm',
				),
			),
			bot_inline_placeholder : '7HDouRi0eSwJcNvd',
			lang_code : 'q6iMZ7m8WxgdPrcH',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 59,
			color : $client->peerColor(
				color : 15,
				background_emoji_id : -1379839856095397226,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -1940258915272242953,
			),
			bot_active_users : 73,
			bot_verification_icon : -2235652515912788084,
			send_paid_messages_stars : 3197751455331275466,
		),
	),
	next_offset : 'P6v38HAd7i0pGRT4',
);
```