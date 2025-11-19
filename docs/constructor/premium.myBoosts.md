# premium.myBoosts

**Description** : *A list of peers we are currently boosting, and how many boost slots we have left*

**Layer** : 218

```tl
premium.myBoosts#9ae228e2 my_boosts:Vector<MyBoost> chats:Vector<Chat> users:Vector<User> = premium.MyBoosts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>my_boosts</mark> | [`Vector<MyBoost>`](type/MyBoost) | Info about boosted peers and remaining boost slots |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Referenced chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Referenced users |

---

## Type

[premium.MyBoosts](type/premium.MyBoosts)

---

## Example

```php
$premiumMyBoosts = $client->premium->myBoosts(
	my_boosts : array(
		$client->myBoost(
			slot : 48,
			peer : $client->peerUser(
				user_id : 5682784973980142212,
			),
			date : 64,
			expires : 18,
			cooldown_until_date : 6,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -91577897068620322,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1192867002224614897,
			title : 'Qo58lLFpsxdrKqCZ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 72,
			date : 82,
			version : 34,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 86,
			),
		),
		$client->chatForbidden(
			id : -6336945275453662571,
			title : 'U56yhIXmE7ZdoHrR',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : 8447766492494454728,
			access_hash : 2735694987716547997,
			title : '4RzKYqPxkV01EbFn',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 16,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'GQD05J1acgM8kirU',
					reason : 'faDhHB3Uvm2jFYyx',
					text : 'z6NsCHdEWwV3P0UO',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 41,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 95,
			),
			participants_count : 21,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 21,
			),
			color : $client->peerColor(
				color : 81,
				background_emoji_id : -1333088626052637267,
			),
			profile_color : $client->peerColor(
				color : 20,
				background_emoji_id : -3571563242168289287,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 80,
			subscription_until_date : 74,
			bot_verification_icon : 5683784345238186511,
			send_paid_messages_stars : 6403996006083857705,
			linked_monoforum_id : 4421531189839940782,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -7191243886901463238,
			access_hash : -9111186901831414008,
			title : 'gtDNwbzrMsOZdlpC',
			until_date : 89,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8920485955085254667,
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
			id : 4562574191866837006,
			access_hash : -6243598877242825798,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 25,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'GngpHIjtya476Rfz',
					reason : 'gS7v3lLdVIn8xtrE',
					text : 'fREkn57lyKIGsboe',
				),
			),
			bot_inline_placeholder : 'i7NkOhU64netpCoS',
			lang_code : 'Ogt2Yqno0ezAw9Q3',
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
				max_id : 50,
			),
			color : $client->peerColor(
				color : 27,
				background_emoji_id : -6077376989376716610,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : -6829985653518123410,
			),
			bot_active_users : 32,
			bot_verification_icon : 5599327162563638678,
			send_paid_messages_stars : 3400071543559891230,
		),
	),
);
```