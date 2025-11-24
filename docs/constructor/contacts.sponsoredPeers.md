# contacts.sponsoredPeers

**Description** : *Sponsored peers*

**Layer** : 218

```tl
contacts.sponsoredPeers#eb032884 peers:Vector<SponsoredPeer> chats:Vector<Chat> users:Vector<User> = contacts.SponsoredPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peers</mark> | [`Vector<SponsoredPeer>`](type/SponsoredPeer) | Sponsored peers |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Info about sponsored chats and channels |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about sponsored users |

---

## Type

[contacts.SponsoredPeers](type/contacts.SponsoredPeers)

---

## Example

```php
$contactsSponsoredPeers = $client->contacts->sponsoredPeers(
	peers : array(
		$client->sponsoredPeer(
			random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			peer : $client->peerUser(
				user_id : -9196929287037175893,
			),
			sponsor_info : '7UvirJ1ML4m8OogV',
			additional_info : 'aK3m7RgzXFdqyMLO',
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -1690965879717099143,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8203561001131546999,
			title : 'pu2keNhWAQ5GjtFa',
			photo : $client->chatPhotoEmpty(),
			participants_count : 57,
			date : 2,
			version : 26,
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
				until_date : 14,
			),
		),
		$client->chatForbidden(
			id : -8958803337667975041,
			title : 'ZRWD0VI9t3vLEbx6',
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
			id : -3578890815989717872,
			access_hash : -3961987696560275575,
			title : 'x2mykYR5BwNp0dIb',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 7,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'eMNGXidoTuKwH8bf',
					reason : 'Y91CX7APr2OJv8NB',
					text : 'xPKgIoOS3tQiETbW',
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
				until_date : 14,
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
				until_date : 83,
			),
			participants_count : 39,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 9,
			),
			color : $client->peerColor(
				color : 75,
				background_emoji_id : -1186066594381255846,
			),
			profile_color : $client->peerColor(
				color : 20,
				background_emoji_id : -1933506212930520538,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 84,
			subscription_until_date : 83,
			bot_verification_icon : 3874218257514094820,
			send_paid_messages_stars : 5413656336065866540,
			linked_monoforum_id : 6451601175586797038,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 1835452740928059233,
			access_hash : -6609242890549076876,
			title : 'uOdoY5xLQ1pRANiv',
			until_date : 21,
		),
	),
	users : array(
		$client->userEmpty(
			id : 347981434480188688,
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
			id : -4985380208733527450,
			access_hash : 2088306964617405673,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 19,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'GtMSCwA8EHILrjXi',
					reason : 'cokQesSf5ThEz6rN',
					text : 'SqWXwatVicMCujDz',
				),
			),
			bot_inline_placeholder : 'xfQvEwAyqr186tzH',
			lang_code : 'boixGhgclC0a5K7U',
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
				max_id : 6,
			),
			color : $client->peerColor(
				color : 19,
				background_emoji_id : 427903275497488303,
			),
			profile_color : $client->peerColor(
				color : 95,
				background_emoji_id : -8908598194990642151,
			),
			bot_active_users : 70,
			bot_verification_icon : -3635403700976600362,
			send_paid_messages_stars : 9000458504814534258,
		),
	),
);
```