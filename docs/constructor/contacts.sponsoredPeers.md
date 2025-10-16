# contacts.sponsoredPeers

**Description** : *Sponsored peers*

**Layer** : 216

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
				user_id : 2838532233572213195,
			),
			sponsor_info : 'H5a4xDWRYgVh7cr1',
			additional_info : '3WVF1rv5seRZfIdD',
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 70578131084546058,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8462987772414811518,
			title : 'fdzmRtEOTlDSwsiK',
			photo : $client->chatPhotoEmpty(),
			participants_count : 2,
			date : 71,
			version : 89,
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
				until_date : 6,
			),
		),
		$client->chatForbidden(
			id : 5351916018020742947,
			title : 'pw5jUvTSqLZKRhxJ',
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
			id : -244510157538621132,
			access_hash : 746655375209329624,
			title : 'sxYGJTKnLOih42UX',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 24,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '74LAHBE8h21bpDog',
					reason : 'Om9Vv5KH6ixdIQF0',
					text : 'kGsmf094OAwRu1Ij',
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
				until_date : 20,
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
				until_date : 9,
			),
			participants_count : 17,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 5,
			color : $client->peerColor(
				color : 15,
				background_emoji_id : -4038903898090011837,
			),
			profile_color : $client->peerColor(
				color : 30,
				background_emoji_id : 300336274552673078,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 62,
			subscription_until_date : 32,
			bot_verification_icon : -6173657168036564507,
			send_paid_messages_stars : -7278484695435536036,
			linked_monoforum_id : 1969835890269741168,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -3833880593786202695,
			access_hash : 7905986525582318369,
			title : 'Amd7SoZeEJ38D5IC',
			until_date : 98,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2930130511696407300,
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
			id : -7519040428869193821,
			access_hash : -9211415460452177260,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'F3OTd4qNSAkvsRne',
					reason : 'Oz9i5HWZYsnruEFb',
					text : 'DtneVxodjUHGRzAM',
				),
			),
			bot_inline_placeholder : 'MGK1APYhCSzXEmfD',
			lang_code : 'H9yASXNGZLjqh1UK',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 68,
			color : $client->peerColor(
				color : 99,
				background_emoji_id : 5419988899668905830,
			),
			profile_color : $client->peerColor(
				color : 15,
				background_emoji_id : -921404657634554361,
			),
			bot_active_users : 10,
			bot_verification_icon : 815661098004490685,
			send_paid_messages_stars : -4944099889477554785,
		),
	),
);
```