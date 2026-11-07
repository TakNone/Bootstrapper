# payments.suggestedStarRefBots

**Description** : *A list of suggested mini apps with available affiliate programs*

**Layer** : 233

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
	count : 14,
	suggested_bots : array(
		$client->starRefProgram(
			bot_id : 390406771295254103,
			commission_permille : 70,
			duration_months : 25,
			end_date : 47,
			daily_revenue_per_user : $client->starsAmount(
				amount : 8452923337921161019,
				nanos : 55,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : -8013648568055705446,
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
			bot_forum_sidebar : true,
			id : -2216030382930366157,
			access_hash : -4789336755752614935,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'QgCaLPyqBDiVf9eW',
					reason : 'vDqQ6R2uEFbUjzSH',
					text : 'enFtw7f5HTDz8hiP',
				),
			),
			bot_inline_placeholder : 'NGMZoIx2bXTL0QKv',
			lang_code : 'uTGinrNjVda6cwef',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 86,
			),
			color : $client->peerColor(
				color : 68,
				background_emoji_id : -9176517501354436938,
			),
			profile_color : $client->peerColor(
				color : 59,
				background_emoji_id : 2762470220877981501,
			),
			bot_active_users : 76,
			bot_verification_icon : 7065323375081517687,
			send_paid_messages_stars : 5571608455056116859,
			linked_community_id : 6758294542639850264,
		),
	),
	next_offset : '3Ed52GfFMRTJu8IC',
);
```