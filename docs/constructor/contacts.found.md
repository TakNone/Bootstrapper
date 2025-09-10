# contacts.found

**Description** : *Users found by name substring and auxiliary data*

**Layer** : 214

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
			user_id : -7521218143528369097,
		),
		$client->peerChat(
			chat_id : -8475922809945624768,
		),
		$client->peerChannel(
			channel_id : 512348870808565543,
		),
	),
	results : array(
		$client->peerUser(
			user_id : 1267077509386231096,
		),
		$client->peerChat(
			chat_id : -7540739258417263136,
		),
		$client->peerChannel(
			channel_id : -7892368239846181516,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6537704371852185178,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4959974489523271062,
			title : 'AehOoFGML86Pmb0X',
			photo : $client->chatPhotoEmpty(),
			participants_count : 13,
			date : 34,
			version : 76,
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
				until_date : 0,
			),
		),
		$client->chatForbidden(
			id : 4827701523297901201,
			title : 'k2wqCQRtI39praKV',
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
			id : -1584152929681040678,
			access_hash : 5388307582860387530,
			title : 'SB1Yis53aoGrWAbz',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 57,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'S6sgn4Ec0PfDVX5x',
					reason : 'sF2UL9rBmAhGRzow',
					text : 'o5nvU7YrQIzsK64b',
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
				until_date : 69,
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
				until_date : 32,
			),
			participants_count : 40,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 74,
			color : $client->peerColor(
				color : 45,
				background_emoji_id : -7178579293126267010,
			),
			profile_color : $client->peerColor(
				color : 83,
				background_emoji_id : 6269792475207487322,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 80,
			subscription_until_date : 15,
			bot_verification_icon : 777217041866623979,
			send_paid_messages_stars : 2841779098438209492,
			linked_monoforum_id : -8235553815395477400,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7395603301380512352,
			access_hash : -1753727881177561575,
			title : 'l87TiuzrZVSHRFmA',
			until_date : 61,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6875612536028332460,
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
			id : 6349635275593888562,
			access_hash : -364144223084286489,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 36,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'nVzHPqwMohvLfemx',
					reason : 'CsKt2n61XNOABJyY',
					text : 'IUA2d4C3BQSyw05J',
				),
			),
			bot_inline_placeholder : 'OlhHj4opyUkL9t2f',
			lang_code : 'kzeRomn2jD8MKtN6',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 76,
			color : $client->peerColor(
				color : 92,
				background_emoji_id : 882493678392744772,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : 7490978640152793043,
			),
			bot_active_users : 11,
			bot_verification_icon : 6828294764366486234,
			send_paid_messages_stars : 1074695249443917676,
		),
	),
);
```