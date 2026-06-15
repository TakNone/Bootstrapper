# contacts.found

**Description** : *Users found by name substring and auxiliary data*

**Layer** : 227

```tl
contacts.found#b3134d9d my_results:Vector<Peer> results:Vector<Peer> chats:Vector<Chat> users:Vector<User> = contacts.Found;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>my_results</mark> | [`Vector<Peer>`](type/Peer) | Personalized results |
| <mark>results</mark> | [`Vector<Peer>`](type/Peer) | List of found user identifiers |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Found chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users |

---

## Type

[contacts.Found](type/contacts.Found)

---

## Example

```php
$contactsFound = $client->contacts->found(
	my_results : array(
		$client->peerUser(
			user_id : 4443486839212331756,
		),
		$client->peerChat(
			chat_id : 2707196783922135579,
		),
		$client->peerChannel(
			channel_id : 5694461890708278405,
		),
	),
	results : array(
		$client->peerUser(
			user_id : -5952186920372225021,
		),
		$client->peerChat(
			chat_id : 3230784407454308942,
		),
		$client->peerChannel(
			channel_id : -4238308558976505249,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7153027151291116954,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 9095277751629928560,
			title : 'rqiPyzjxTtNGl8kH',
			photo : $client->chatPhotoEmpty(),
			participants_count : 6,
			date : 83,
			version : 83,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 85,
			),
		),
		$client->chatForbidden(
			id : 8596998644734956429,
			title : 'ZWXroQqJV1kPfODp',
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
			id : 8782369715097496148,
			access_hash : 6942319446102763929,
			title : 'JhovyWseAtEVlR1u',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 86,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'vB3qzSJjpTH47Gta',
					reason : 'A1mEvzJWrdL6KaZB',
					text : 'EB1ZKVvCtS36Tygq',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 67,
			),
			participants_count : 62,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 8,
			),
			color : $client->peerColor(
				color : 45,
				background_emoji_id : 6455694596767360573,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : 7224140017763959304,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 72,
			subscription_until_date : 47,
			bot_verification_icon : 6830875062248799176,
			send_paid_messages_stars : -889235251531663518,
			linked_monoforum_id : -5294709683668298769,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 7948533698657324565,
			access_hash : -1921773997132363521,
			title : 'RDtBvPpSFfe9Zj3M',
			until_date : 85,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7899185096670449145,
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
			id : 3033335808540515162,
			access_hash : 5611986401911202004,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 19,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fczBOmjg6kLMpRU1',
					reason : 'R5WTICxpF46lrX2B',
					text : 'aKxQ7bs8oXzuGFtS',
				),
			),
			bot_inline_placeholder : 'K6uS8RJvEzH4ftQm',
			lang_code : 'qfXMD60cgJaHNRtW',
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
				max_id : 8,
			),
			color : $client->peerColor(
				color : 92,
				background_emoji_id : 8858620010312163754,
			),
			profile_color : $client->peerColor(
				color : 0,
				background_emoji_id : -8327428931615872297,
			),
			bot_active_users : 25,
			bot_verification_icon : -2174624766437093683,
			send_paid_messages_stars : 7225123400917412447,
		),
	),
);
```