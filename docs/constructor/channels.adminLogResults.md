# channels.adminLogResults

**Description** : *Admin log events*

**Layer** : 211

```tl
channels.adminLogResults#ed8af74d events:Vector<ChannelAdminLogEvent> chats:Vector<Chat> users:Vector<User> = channels.AdminLogResults;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>events</mark> | [`Vector<ChannelAdminLogEvent>`](type/ChannelAdminLogEvent) | Admin log events |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats mentioned in events |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users mentioned in events |

---

## Type

[channels.AdminLogResults](type/channels.AdminLogResults)

---

## Example

```php
$channelsAdminLogResults = $client->channels->adminLogResults(
	events : array(
		$client->channelAdminLogEvent(
			id : 3158609462175315911,
			date : 29,
			user_id : 1245310771249214221,
			action : $client->channelAdminLogEventActionChangeTitle(
				prev_value : 'SDX4y32ThelikKsF',
				new_value : 'MOFUxA0rwT3zn1fe',
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6803043808305730609,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7659712239176753748,
			title : 'l6KjvOH5e1khYRWA',
			photo : $client->chatPhotoEmpty(),
			participants_count : 76,
			date : 13,
			version : 47,
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
				until_date : 45,
			),
		),
		$client->chatForbidden(
			id : -3112129850612336674,
			title : 'k7nj8E1PzJ3HWyxA',
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
			id : -878871999394549211,
			access_hash : -8203540347563404782,
			title : 'IJnMHexVY01Kimt7',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 100,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'uQOkZaEW6yocB0JP',
					reason : 'ZKr2HmsV7lbw0FvO',
					text : 'A1zUV7kuNM3CY9oi',
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
				until_date : 30,
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
				until_date : 62,
			),
			participants_count : 44,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 28,
			color : $client->peerColor(
				color : 97,
				background_emoji_id : 6887842374949415502,
			),
			profile_color : $client->peerColor(
				color : 47,
				background_emoji_id : -7645113824716817262,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 79,
			subscription_until_date : 50,
			bot_verification_icon : -1313260897118540007,
			send_paid_messages_stars : 2856334698946185869,
			linked_monoforum_id : -7290486948192348627,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 4668318781540421410,
			access_hash : 869075805323290344,
			title : 'zsuVCgEimqJOtHf2',
			until_date : 48,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5474350529322912333,
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
			id : -8706384208899205330,
			access_hash : 9052281021682896237,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 52,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '7QWToC6x81AGqZku',
					reason : 'OXn8iLfHRDgzscKb',
					text : 'PpOwLdK4TSbQuRMe',
				),
			),
			bot_inline_placeholder : 'gxqEJhfv7diCWa6H',
			lang_code : 'iJhdM7wA6pbzqEH0',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 4,
			color : $client->peerColor(
				color : 39,
				background_emoji_id : -3375654381560646514,
			),
			profile_color : $client->peerColor(
				color : 82,
				background_emoji_id : 1490810178666791772,
			),
			bot_active_users : 27,
			bot_verification_icon : -6206600255448424270,
			send_paid_messages_stars : 5180026735134734850,
		),
	),
);
```