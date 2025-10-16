# contacts.topPeers

**Description** : *Top peers*

**Layer** : 216

```tl
contacts.topPeers#70b772a8 categories:Vector<TopPeerCategoryPeers> chats:Vector<Chat> users:Vector<User> = contacts.TopPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>categories</mark> | [`Vector<TopPeerCategoryPeers>`](type/TopPeerCategoryPeers) | Top peers by top peer category |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[contacts.TopPeers](type/contacts.TopPeers)

---

## Example

```php
$contactsTopPeers = $client->contacts->topPeers(
	categories : array(
		$client->topPeerCategoryPeers(
			category : $client->topPeerCategoryBotsPM(),
			count : 10,
			peers : array(
				$client->topPeer(
					peer : $client->peerUser(...),
					rating : 2027146.919921875,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -8128560669264824596,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5669764903274066110,
			title : 'N2W8okGcaLvUFbfE',
			photo : $client->chatPhotoEmpty(),
			participants_count : 33,
			date : 41,
			version : 100,
			migrated_to : $client->inputChannelEmpty(),
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
				until_date : 10,
			),
		),
		$client->chatForbidden(
			id : 8941575669110138470,
			title : 'lFUG3XrVt4qQfRDJ',
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
			id : -8552330596981869553,
			access_hash : 4615375959920119535,
			title : 'peIu6Tfb9SkVoxYj',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 12,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'cEoCbhGynq1Wuv8K',
					reason : 'ciFfOxtd3TlZKmYX',
					text : 'RIwuUd2cniMXeGmp',
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
				until_date : 13,
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
				until_date : 81,
			),
			participants_count : 21,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 25,
			color : $client->peerColor(
				color : 28,
				background_emoji_id : -7413188068686904079,
			),
			profile_color : $client->peerColor(
				color : 4,
				background_emoji_id : 3245760424556440924,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 14,
			subscription_until_date : 53,
			bot_verification_icon : -7021328447243138363,
			send_paid_messages_stars : -6062865505922559681,
			linked_monoforum_id : 1973134957957318109,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7418266505643193593,
			access_hash : 6516666170001521223,
			title : '3Yj5e8PODovMH4KB',
			until_date : 62,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3117820358637910562,
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
			id : 7448939966744995516,
			access_hash : 7693118973185597155,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 92,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'O2VMhSl4G9wnWZ8e',
					reason : '0q9xReS7LJNEDUaC',
					text : 'TX8jp1x9EcFMNBKO',
				),
			),
			bot_inline_placeholder : 'wIW5ajsCDEgNiOhb',
			lang_code : 'fdpUEs7aZ8xcFCPt',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 5,
			color : $client->peerColor(
				color : 49,
				background_emoji_id : -44747757828077875,
			),
			profile_color : $client->peerColor(
				color : 18,
				background_emoji_id : -1175787957481918801,
			),
			bot_active_users : 40,
			bot_verification_icon : 8105960547009531248,
			send_paid_messages_stars : 4466665915267951585,
		),
	),
);
```