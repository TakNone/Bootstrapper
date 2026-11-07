# premium.boostsList

**Description** : *List of boosts that were applied to a peer by multiple users*

**Layer** : 233

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
	count : 43,
	boosts : array(
		$client->boost(
			gift : true,
			giveaway : true,
			unclaimed : true,
			id : 'KviVXnjd56c0GPWh',
			user_id : 65793715225964110,
			giveaway_msg_id : 20,
			date : 100,
			expires : 18,
			used_gift_slug : 'jJgzSVR5pr43T82q',
			multiplier : 43,
			stars : 3286593091822224940,
		),
	),
	next_offset : 'vs91nmPYfbdkBr7g',
	users : array(
		$client->userEmpty(
			id : 5713272601227722966,
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
			id : -6088477369871181834,
			access_hash : -495373942659787317,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 21,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5EDymuegohQvBfjn',
					reason : 'YBH6xVCJeuc5gQwX',
					text : '7hZHbXESJtLjd10Q',
				),
			),
			bot_inline_placeholder : 'IT7YspPvkg6ZNt3C',
			lang_code : '38XkjPsZeFuEf1DY',
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
				max_id : 36,
			),
			color : $client->peerColor(
				color : 53,
				background_emoji_id : -864965201433466227,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : 7170321834296665922,
			),
			bot_active_users : 28,
			bot_verification_icon : -5036766090155453630,
			send_paid_messages_stars : -2853366910855401710,
			linked_community_id : 3834540088083663877,
		),
	),
);
```