# premium.boostsList

**Description** : *List of boosts that were applied to a peer by multiple users*

**Layer** : 222

```tl
premium.boostsList#86f8613c flags:# count:int boosts:Vector<Boost> next_offset:flags.0?string users:Vector<User> = premium.BoostsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results |
| <mark>boosts</mark> | [`Vector<Boost>`](type/Boost) | Boosts |
| **next_offset** | [`flags.0?string`](type/string) | Offset that can be used for pagination |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[premium.BoostsList](type/premium.BoostsList)

---

## Example

```php
$premiumBoostsList = $client->premium->boostsList(
	count : 70,
	boosts : array(
		$client->boost(
			gift : true,
			giveaway : true,
			unclaimed : true,
			id : 'EXJOCw9vyusU6Axl',
			user_id : -8877401538374484661,
			giveaway_msg_id : 18,
			date : 54,
			expires : 34,
			used_gift_slug : '5Nm9jspYWkBOD7uZ',
			multiplier : 36,
			stars : -1584586501776167309,
		),
	),
	next_offset : 'ZQOtxRPmp7zfrIlk',
	users : array(
		$client->userEmpty(
			id : -4513667292586800812,
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
			id : 7040975442869833612,
			access_hash : -634477267138557666,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'asj9wJUWeGEXxDCN',
					reason : 'FGVoMlqjXQJbPpRf',
					text : '4aJekM0ZUNrRV26B',
				),
			),
			bot_inline_placeholder : 'VH6W2AUh1t9omylv',
			lang_code : 'hFgsdDQ4pZbaNJnI',
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
				max_id : 80,
			),
			color : $client->peerColor(
				color : 86,
				background_emoji_id : -3341681762407281117,
			),
			profile_color : $client->peerColor(
				color : 33,
				background_emoji_id : 5011834951061108113,
			),
			bot_active_users : 69,
			bot_verification_icon : -7550658894328725106,
			send_paid_messages_stars : 8073591508137975896,
		),
	),
);
```