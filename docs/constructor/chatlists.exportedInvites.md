# chatlists.exportedInvites

**Description** : *Info about multiple chat folder deep links »*

**Layer** : 211

```tl
chatlists.exportedInvites#10ab6dc7 invites:Vector<ExportedChatlistInvite> chats:Vector<Chat> users:Vector<User> = chatlists.ExportedInvites;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invites</mark> | [`Vector<ExportedChatlistInvite>`](type/ExportedChatlistInvite) | The chat folder deep links » |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ExportedInvites](type/chatlists.ExportedInvites)

---

## Example

```php
$chatlistsExportedInvites = $client->chatlists->exportedInvites(
	invites : array(
		$client->exportedChatlistInvite(
			title : 'kbIQeFlXi6vY45Gw',
			url : 'https://docs.liveproto.dev',
			peers : array(
				$client->peerUser(
					user_id : -9009947898992603861,
				),
				$client->peerChat(
					chat_id : -5050308439596650179,
				),
				$client->peerChannel(
					channel_id : 2703400227694490606,
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6895852664481163248,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1300214820816077873,
			title : 'cp1ha2fHCstQUl7X',
			photo : $client->chatPhotoEmpty(),
			participants_count : 15,
			date : 17,
			version : 44,
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
				until_date : 21,
			),
		),
		$client->chatForbidden(
			id : -3512931524586561321,
			title : '34IA7zBwouTdNWjf',
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
			id : 7696539180582726281,
			access_hash : -6572727743328308912,
			title : 'hc7DmPB0N5ECazFl',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 70,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '17sHdEXevnQwbCug',
					reason : 'SeE48d2aCrHUDjIT',
					text : 'ibnAkBVujx240aw8',
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
				until_date : 59,
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
				until_date : 41,
			),
			participants_count : 19,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 18,
			color : $client->peerColor(
				color : 55,
				background_emoji_id : -6233680334189074201,
			),
			profile_color : $client->peerColor(
				color : 15,
				background_emoji_id : 6034398227274457131,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 85,
			subscription_until_date : 98,
			bot_verification_icon : -2177653932002928991,
			send_paid_messages_stars : -6178922655808678270,
			linked_monoforum_id : -6231507282709805319,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2357598410509785789,
			access_hash : 5981100363571938105,
			title : 'Ie5RzjDdJsfuoUq9',
			until_date : 32,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7820664205009480435,
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
			id : 4349105611440098930,
			access_hash : -2917122483280253493,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 20,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'SEP2IpgOW3RAY6yK',
					reason : 'Ucnv2kGgmiWRJ45M',
					text : 'fhKwxvP7zjpN9Xso',
				),
			),
			bot_inline_placeholder : 'ldipebcswvTHkZyP',
			lang_code : 'pPzrsKMEaw46iCqb',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 82,
			color : $client->peerColor(
				color : 69,
				background_emoji_id : -5962332289307122074,
			),
			profile_color : $client->peerColor(
				color : 88,
				background_emoji_id : -4440887155300723282,
			),
			bot_active_users : 56,
			bot_verification_icon : 2206490975459844370,
			send_paid_messages_stars : -2266861153930986769,
		),
	),
);
```