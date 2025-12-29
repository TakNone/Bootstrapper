# updatesCombined

**Description** : *Constructor for a group of updates*

**Layer** : 218

```tl
updatesCombined#725b04c3 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq_start:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq_start</mark> | [`int`](type/int) | Value seq for the earliest update in a group |
| <mark>seq</mark> | [`int`](type/int) | Value seq for the latest update in a group |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updatesCombined(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 27,
				peer_id : $client->peerUser(
					user_id : -3008159523395296881,
				),
			),
			pts : 31,
			pts_count : 7,
		),
		$client->updateMessageID(
			id : 77,
			random_id : 6080535220948463769,
		),
		$client->updateDeleteMessages(
			messages : array(50),
			pts : 64,
			pts_count : 59,
		),
		$client->updateUserTyping(
			user_id : 6829927606259626521,
			top_msg_id : 48,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 6048496786815319424,
			from_id : $client->peerUser(
				user_id : -3551670327250227222,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 3622728262802642256,
				self_participant : $client->chatParticipant(
					user_id : -1519571500831215707,
					inviter_id : -1020812252665739706,
					date : 43,
				),
			),
		),
		$client->updateUserStatus(
			user_id : -1091159583309320533,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 4918248307489543693,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : 0,
			date : 26,
			device : '3bCKRaisX16AoF4n',
			location : '8hvc0KOsINHztSqa',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -8391670272477318301,
				chat_id : 47,
				date : 44,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 51,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 10,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 3,
			),
			date : 3,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 62,
			max_date : 48,
			date : 44,
		),
		$client->updateChatParticipantAdd(
			chat_id : 7657346122421103660,
			user_id : 3415976669268293707,
			inviter_id : -5558090697556225964,
			date : 33,
			version : 15,
		),
		$client->updateChatParticipantDelete(
			chat_id : 8946548130773356710,
			user_id : -1512903789305412889,
			version : 83,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 30,
					ip_address : '127.0.0.1',
					port : 33,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : 4251136805392453244,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : true,
				mute_until : 94,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 29,
			type : 'DGJ5lzP6HML9ptrC',
			message : 'I53HvD6fgwRF2MUK',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 82,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 37,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 53,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 12,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 69,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 89,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 52,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 49,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 46,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 82,
					language : 'yG7V8OXS6i0zMTE9',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 94,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 19,
					user_id : -4314964102269412856,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 39,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 84,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 96,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 21,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 23,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 10,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 39,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 17,
					document_id : 8416879698245716030,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 60,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-5217056968245543613),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(7662297370457016170),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-2226034492474718855),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(5503790276104769722),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -2964598100404921470,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 77,
			peer : $client->peerUser(
				user_id : 5835078953231842209,
			),
			top_msg_id : 11,
			max_id : 11,
			still_unread_count : 40,
			pts : 58,
			pts_count : 3,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -832668676452806466,
			),
			max_id : 95,
			pts : 48,
			pts_count : 81,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 255247555959993321,
				url : 'https://docs.liveproto.dev',
			),
			pts : 42,
			pts_count : 55,
		),
		$client->updateReadMessagesContents(
			messages : array(94),
			pts : 63,
			pts_count : 95,
			date : 35,
		),
		$client->updateChannelTooLong(
			channel_id : 503928338910753487,
			pts : 50,
		),
		$client->updateChannel(
			channel_id : -745146636693027643,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 50,
				peer_id : $client->peerUser(
					user_id : -3761670914297276454,
				),
			),
			pts : 0,
			pts_count : 11,
		),
		$client->updateReadChannelInbox(
			folder_id : 28,
			channel_id : 3355971065788619174,
			max_id : 11,
			still_unread_count : 12,
			pts : 17,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 3971784883328930977,
			messages : array(52),
			pts : 91,
			pts_count : 56,
		),
		$client->updateChannelMessageViews(
			channel_id : -1139201391230069936,
			id : 21,
			views : 80,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 6683231701830391400,
			user_id : -7063258818568496221,
			is_admin : false,
			version : 65,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 58,
					id : -6743438511988542602,
					access_hash : -8606500292687529995,
					title : 'B6MNcip2d1s4fQJj',
					short_name : 'uHh1VKPrfTde2zai',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 30,
					thumb_version : 5,
					thumb_document_id : 5849757068901406925,
					count : 94,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : '6R3NGfaP4JgQ2U7i',
						documents : array(4084767830315681016),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : 6087148082190410622,
						keyword : array('bZuWmNz8FoS0KnP4'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -4362631672472305268,
					),
					$client->document(
						id : -3021243380159432056,
						access_hash : -2336014412128943643,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 65,
						mime_type : 'cuYZvbMzXxdaN1y6',
						size : -1237679631694368690,
						thumbs : array(
							$client->photoSizeEmpty(...),
							$client->photoSize(...),
							$client->photoCachedSize(...),
							$client->photoStrippedSize(...),
							$client->photoSizeProgressive(...),
							$client->photoPathSize(...),
						),
						video_thumbs : array(
							$client->videoSize(...),
							$client->videoSizeEmojiMarkup(...),
							$client->videoSizeStickerMarkup(...),
						),
						dc_id : 33,
						attributes : array(
							$client->documentAttributeImageSize(...),
							$client->documentAttributeAnimated(...),
							$client->documentAttributeSticker(...),
							$client->documentAttributeVideo(...),
							$client->documentAttributeAudio(...),
							$client->documentAttributeFilename(...),
							$client->documentAttributeHasStickers(...),
							$client->documentAttributeCustomEmoji(...),
						),
					),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(-7383263100222807376),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : -5097401952761693872,
			user_id : 950716810811083244,
			query : 'Zi3PJCYu1n8vzm7c',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'AtzVrmUOvPnuJ6Wj',
		),
		$client->updateBotInlineSend(
			user_id : 2584871469744310768,
			query : 'MaSBFvUwZ5I7RQVg',
			geo : $client->geoPointEmpty(),
			id : 'pEwNRsgrn6j4Gc89',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 44,
				id : 1846959532926442967,
				access_hash : 6375506503105031583,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 85,
				peer_id : $client->peerUser(
					user_id : 4222110360569783259,
				),
			),
			pts : 42,
			pts_count : 50,
		),
		$client->updateBotCallbackQuery(
			query_id : 3365604408810604214,
			user_id : -2925891945462177187,
			peer : $client->peerUser(
				user_id : -1702968333434676838,
			),
			msg_id : 76,
			chat_instance : -126847459239880551,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'HfmTI9d0gbDGSBsu',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 61,
				peer_id : $client->peerUser(
					user_id : 8312513031548751746,
				),
			),
			pts : 93,
			pts_count : 40,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -6850963494911975071,
			user_id : -8515926401489448691,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 38,
				id : -4961510944588280402,
				access_hash : 8077834471800544680,
			),
			chat_instance : 2028995756962345099,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'JQoDglFCzUwa37qI',
		),
		$client->updateReadChannelOutbox(
			channel_id : -5172041573330908969,
			max_id : 85,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -3607392946609055367,
			),
			top_msg_id : 95,
			saved_peer_id : $client->peerUser(
				user_id : 1103508455462599097,
			),
			draft : $client->draftMessageEmpty(
				date : 2,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -2359475357180689831,
			webpage : $client->webPageEmpty(
				id : -8641805148874427216,
				url : 'https://docs.liveproto.dev',
			),
			pts : 55,
			pts_count : 13,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 67,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 5442834240717549644,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 88,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 1586837243715613948,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 50,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'R8rmBzjO3VETQsIK',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 2531738087202984244,
			data : $client->dataJSON(
				data : '0TncRtH4gkKSVsbL',
			),
			timeout : 18,
		),
		$client->updateBotShippingQuery(
			query_id : 1811896679235010443,
			user_id : 8764734230136055628,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'QBmYJaCj27EGNUf6',
				street_line2 : 'N0rbXqKiWjZPpLGU',
				city : 'xeDkBT7Vt5cujJGs',
				state : '1LpIMG2EYSetOzgR',
				country_iso2 : 'Iftz7PFHBRyhmKiL',
				post_code : '0pOvyIViu7jFztbe',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -469981153011199406,
			user_id : 7397144017173038263,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'Fw9RfANL6rC3sxtZ',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'jqeZQ96rdgJ41TmF',
					street_line2 : 'GL8CuhQz5E4F7JWo',
					city : 'a1y3Nd0UQV2gGw6z',
					state : 'NT0pvS654fkazy3F',
					country_iso2 : 'PD8ZnEo3QHqaIlCm',
					post_code : 'zu0DnRjvMY63fXxm',
				),
			),
			shipping_option_id : 'ApiZTf5ISqwPblL3',
			currency : 'UzWc8jbMOFGLqmsR',
			total_amount : -283266616618625887,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 5302882117217060657,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'hGHqE8tWR9J2Oinf',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'hKubDylFq4AJnH71',
				from_version : 40,
				version : 24,
				strings : array(
					$client->langPackString(
						key : 'er0PyXUsp9EhSGwV',
						value : 'bBeC8puXYx4d1Jsv',
					),
					$client->langPackStringPluralized(
						key : 'dGtWjXCQZcx2vLqJ',
						zero_value : 'soJ0gF7AChHf9qpk',
						one_value : 'MpnaKLyUeD9i5ZYX',
						two_value : 'M8c9gBkZoix5tQpK',
						few_value : '9kVZRetzIW4LYPKa',
						many_value : '42UdWBcRby0HJo7n',
						other_value : 'ARTiXxYkPJOZys6g',
					),
					$client->langPackStringDeleted(
						key : 'NRjqA7Ekf8W2DFHy',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -3162058021582877188,
			top_msg_id : 48,
			saved_peer_id : $client->peerUser(
				user_id : 5149601379674077200,
			),
			messages : array(25),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 3830527604030308678,
			available_min_id : 72,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -8176859441723662025,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : -5243540456522157430,
			),
		),
		$client->updateMessagePoll(
			poll_id : 2027920981069054989,
			poll : $client->poll(
				id : 118374770170842471,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'h6JM47HslFNmybYC',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
					),
				),
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				close_period : 24,
				close_date : 25,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 90,
					),
				),
				total_voters : 32,
				recent_voters : array(
					$client->peerUser(
						user_id : 5854017668115976103,
					),
					$client->peerChat(
						chat_id : 5503622651417829718,
					),
					$client->peerChannel(
						channel_id : -8316069210975647603,
					),
				),
				solution : 'mQbVgRnd3Pi8526C',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 20,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 98,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 45,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 82,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 75,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 70,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 36,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 70,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 59,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 8,
						language : 'CpYjiBy5RD1eXHE3',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 42,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 68,
						user_id : 2150725884195421168,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 37,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 43,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 54,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 68,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 4,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 55,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 10,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 4,
						document_id : 6064512116618516826,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 87,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 3298757370968169193,
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
				until_date : 48,
			),
			version : 96,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 1477070013599702503,
					),
					folder_id : 45,
				),
			),
			pts : 22,
			pts_count : 31,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -7523952686025442348,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 63,
				request_chat_title : 'yxIFdDoOStJNzW8T',
				request_chat_date : 70,
				business_bot_id : 8605209506754961514,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -337415073859309284,
				registration_month : 'sEN3mqAUIQefw0iK',
				phone_country : '+1234567890',
				name_change_date : 10,
				photo_change_date : 88,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : 7993435139625811770,
					),
					expires : 18,
					distance : 85,
				),
				$client->peerSelfLocated(
					expires : 86,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 7,
				peer_id : $client->peerUser(
					user_id : 6257316841482410717,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 8904844636144375312,
			),
			messages : array(41),
			sent_messages : array(5),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -2124626005914659823,
				access_hash : -4161243494141074949,
				slug : 'nifCglZsyrjz2BWA',
				title : 'iPFLJc8vAaUl6Zh4',
				document : $client->documentEmpty(
					id : 1332865645649173425,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 73,
						outbox_accent_color : 10,
						message_colors : array(60),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'bLHNP4a3W9JMjqDm',
				installs_count : 11,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -8318356126552025053,
			),
			msg_id : 34,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -6314453273125765226,
			peer : $client->peerUser(
				user_id : -7181430612879910752,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 98,
		),
		$client->updateDialogFilter(
			id : 50,
			filter : $client->dialogFilter(
				contacts : true,
				non_contacts : true,
				groups : true,
				broadcasts : true,
				bots : true,
				exclude_muted : true,
				exclude_read : true,
				exclude_archived : true,
				title_noanimate : true,
				id : 87,
				title : $client->textWithEntities(
					text : 'JxF0t9pfSe5aN24B',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
					),
				),
				emoticon : 'WPsJhSfuT7gN1Mc2',
				color : 18,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(1),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 1043135826678853660,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 2058593168094655390,
			id : 87,
			forwards : 68,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 4874823107055067762,
			top_msg_id : 20,
			read_max_id : 88,
			broadcast_id : -1469140319028680883,
			broadcast_post : 62,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : 1095463034337646624,
			top_msg_id : 99,
			read_max_id : 6,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 3624329288495012669,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -7225065403416601951,
			top_msg_id : 95,
			from_id : $client->peerUser(
				user_id : 8794720831348189059,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : 6464248195988717934,
			),
			messages : array(37),
			pts : 18,
			pts_count : 34,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -2676599694483266264,
			messages : array(68),
			pts : 94,
			pts_count : 84,
		),
		$client->updateChat(
			chat_id : 4057621947774174760,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -1261031071056110948,
				access_hash : -8162986551234509886,
			),
			participants : array(
				$client->groupCallParticipant(
					muted : true,
					left : true,
					can_self_unmute : true,
					just_joined : true,
					versioned : true,
					min : true,
					muted_by_you : true,
					volume_by_admin : true,
					self : true,
					video_joined : true,
					peer : $client->peerUser(
						user_id : -6059265389646892473,
					),
					date : 26,
					active_date : 82,
					source : 90,
					volume : 31,
					about : 'V1Etr0lPmiaR38h4',
					raise_hand_rating : -3980041270715443684,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : '6Cfo8a3W45bZmJjA',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 59,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : '2lBaLXgCkrKWtc6H',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 3,
					),
					paid_stars_total : 2792831367556743720,
				),
			),
			version : 83,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : 3725884006955302192,
			),
			call : $client->groupCallDiscarded(
				id : -6325250895132437247,
				access_hash : 1716005455965378150,
				duration : 33,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 2925590144309756218,
			),
			ttl_period : 72,
		),
		$client->updateChatParticipant(
			chat_id : 5961096026492343881,
			date : 65,
			actor_id : 2924376353080176853,
			user_id : 8251023952014263455,
			prev_participant : $client->chatParticipant(
				user_id : -8614506364405142624,
				inviter_id : -8223277883935599246,
				date : 21,
			),
			new_participant : $client->chatParticipant(
				user_id : -7044808012634681418,
				inviter_id : -5546412350102821141,
				date : 43,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'EgT1jiUfNZD6G3Vz',
				admin_id : -166790593222314648,
				date : 86,
				start_date : 14,
				expire_date : 48,
				usage_limit : 29,
				usage : 55,
				requested : 68,
				subscription_expired : 30,
				title : '1iSTbZIJ2YfAq36N',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 25,
					amount : -4749020008575030475,
				),
			),
			qts : 69,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -2163378888746489356,
			date : 71,
			actor_id : 6977985440624252174,
			user_id : -5315563035102661707,
			prev_participant : $client->channelParticipant(
				user_id : -9136511093133950547,
				date : 86,
				subscription_until_date : 35,
			),
			new_participant : $client->channelParticipant(
				user_id : 789306021370651680,
				date : 50,
				subscription_until_date : 5,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '6o3iRONKYnA7E1l4',
				admin_id : 563359250147473725,
				date : 15,
				start_date : 13,
				expire_date : 80,
				usage_limit : 92,
				usage : 41,
				requested : 20,
				subscription_expired : 53,
				title : 'WXO37P54d2mZ0Evt',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 63,
					amount : 6231851976821741214,
				),
			),
			qts : 45,
		),
		$client->updateBotStopped(
			user_id : -5092721057880120945,
			date : 13,
			stopped : false,
			qts : 86,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'lbm34ovHNdkCJUuz',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : -5713914835807101810,
			),
			bot_id : -1401991331053863086,
			commands : array(
				$client->botCommand(
					command : 'eOaxB8ycX3bNWT5h',
					description : 'usWbAcFv3Cxlp2jY',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 4022123781952371062,
			),
			requests_pending : 46,
			recent_requesters : array(-7698984819276190689),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -6058432580923845063,
			),
			date : 72,
			user_id : -8561346176667636467,
			about : '0TMp3rkwDNavYQd2',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'nRNMUcpegYWio6Ok',
				admin_id : 85807698139141205,
				date : 19,
				start_date : 46,
				expire_date : 78,
				usage_limit : 53,
				usage : 6,
				requested : 51,
				subscription_expired : 39,
				title : '2VcOMvyzro5QgFAl',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 81,
					amount : 1538537044618795234,
				),
			),
			qts : 89,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 99099340924234099,
			),
			msg_id : 93,
			top_msg_id : 47,
			saved_peer_id : $client->peerUser(
				user_id : -337201694575934290,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 34,
						reaction : $client->reactionEmpty(...),
						count : 86,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 43,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 36,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 7998325948240685119,
		),
		$client->updateBotMenuButton(
			bot_id : -5839043525550159245,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -6245531446279018952,
			),
			msg_id : 63,
			transcription_id : -5644519252491736748,
			text : 'DH6Tf3WwSORIAbZ8',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 8834535236501097150,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : 2815452814505450265,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 6820921068671275856,
			),
			msg_id : 24,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 85,
					h : 76,
					thumb : $client->photoSizeEmpty(
						type : 'uWF9ZjEKSml6ixcY',
					),
					video_duration : 4,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -150709512991567301,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 5355502851504254080,
			),
			story : $client->storyItemDeleted(
				id : 39,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 3534051738392088087,
			),
			max_id : 97,
		),
		$client->updateStoryID(
			id : 29,
			random_id : -2692708411129666502,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 67,
				cooldown_until_date : 70,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -5506894399527349453,
			),
			story_id : 100,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -8888154998207101056,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'ktS9Q0bO2KylJZAw',
				user_id : -2025115163109346123,
				giveaway_msg_id : 8,
				date : 96,
				expires : 53,
				used_gift_slug : 'Ro7b50vq34mMy8gU',
				multiplier : 43,
				stars : -7796185209332018136,
			),
			qts : 49,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -6843628934743164303,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 1903912277160079157,
			),
			wallpaper : $client->wallPaper(
				id : -109070667494545867,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 1872918018474662059,
				slug : 'fu6D2UkWnv3CshLG',
				document : $client->documentEmpty(
					id : -2982601769039520164,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 85,
					second_background_color : 9,
					third_background_color : 60,
					fourth_background_color : 80,
					intensity : 30,
					rotation : 69,
					emoticon : '5BnzhOoPmRc4Fqke',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -1457801849265206281,
			),
			msg_id : 66,
			date : 52,
			actor : $client->peerUser(
				user_id : 8701363495832224517,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'z0Srb7Eu6NgC3afB',
				),
				$client->reactionCustomEmoji(
					document_id : 7265905620295795828,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '78vnfElmBG6XM3oA',
				),
				$client->reactionCustomEmoji(
					document_id : 6085768934358373172,
				),
				$client->reactionPaid(),
			),
			qts : 37,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -2721932188928407939,
			),
			msg_id : 94,
			date : 85,
			reactions : array(
				$client->reactionCount(
					chosen_order : 44,
					reaction : $client->reactionEmpty(),
					count : 15,
				),
			),
			qts : 26,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -7237381190369317830,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 6858125040195953287,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 48,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 't4B1kvCfKJAsrga9',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 29,
					shortcut : 'q0hRfHZrwD9Pinks',
					top_message : 50,
					count : 100,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 6,
				shortcut : 'PreL8dKBlw76vkFp',
				top_message : 54,
				count : 87,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 40,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 7,
				peer_id : $client->peerUser(
					user_id : -8240564189667947990,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 60,
			messages : array(29),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'urzYXGpT9lPC1mqo',
				user_id : 8423311170163076208,
				dc_id : 50,
				date : 66,
				rights : $client->businessBotRights(
					reply : true,
					read_messages : true,
					delete_sent_messages : true,
					delete_received_messages : true,
					edit_name : true,
					edit_bio : true,
					edit_profile_photo : true,
					edit_username : true,
					view_gifts : true,
					sell_gifts : true,
					change_gift_settings : true,
					transfer_and_upgrade_gifts : true,
					transfer_stars : true,
					manage_stories : true,
				),
			),
			qts : 37,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'Zgy1CH6icprPfLW0',
			message : $client->messageEmpty(
				id : 92,
				peer_id : $client->peerUser(
					user_id : 336847485681710721,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 88,
				peer_id : $client->peerUser(
					user_id : -4976760554705836670,
				),
			),
			qts : 1,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'H9FmJi5XUByxv7rP',
			message : $client->messageEmpty(
				id : 4,
				peer_id : $client->peerUser(
					user_id : 1865729636702543851,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 70,
				peer_id : $client->peerUser(
					user_id : -77393195926021857,
				),
			),
			qts : 2,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'NYmhv05kVxU13n2r',
			peer : $client->peerUser(
				user_id : 625205055888182745,
			),
			messages : array(73),
			qts : 15,
		),
		$client->updateNewStoryReaction(
			story_id : 49,
			peer : $client->peerUser(
				user_id : 9150215617407813252,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 5968826469959021756,
				nanos : 30,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 650005058347379179,
			user_id : 6068683071146883265,
			connection_id : '7fg1YdoDRChu4vIK',
			message : $client->messageEmpty(
				id : 51,
				peer_id : $client->peerUser(
					user_id : -6125796804061976160,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 95,
				peer_id : $client->peerUser(
					user_id : 2195151284924239784,
				),
			),
			chat_instance : -3096511718909097412,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -5647413025593355372,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : 8180913517648753079,
					nanos : 29,
				),
				available_balance : $client->starsAmount(
					amount : 5848507972815417136,
					nanos : 33,
				),
				overall_revenue : $client->starsAmount(
					amount : 5171009744414093860,
					nanos : 55,
				),
				next_withdrawal_at : 86,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : 4155787112290839477,
			payload : 'uVdD2XyG9gUqv6eR',
			qts : 24,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 97,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 14,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -91351812742190376,
				access_hash : 4121761557423909171,
			),
			sub_chain_id : 57,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 33,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 6529363424461917973,
			saved_peer_id : $client->peerUser(
				user_id : 1063218754767231281,
			),
			read_max_id : 97,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : 2861384693287034303,
			saved_peer_id : $client->peerUser(
				user_id : 7989479094276839823,
			),
			read_max_id : 45,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -2090589453318870792,
			saved_peer_id : $client->peerUser(
				user_id : -7221394390912466100,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 2554252178282888776,
				access_hash : 1567183361237036384,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 2,
				from_id : $client->peerUser(
					user_id : 6857062160598288776,
				),
				date : 0,
				message : $client->textWithEntities(
					text : '8sqPTL6NpOQ9BCwH',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
					),
				),
				paid_message_stars : -3551262841011820774,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 2838347060460790536,
				access_hash : -7976320186017077092,
			),
			from_id : $client->peerUser(
				user_id : 6173897011664283827,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : -2571711610449727343,
			),
			topic_id : 26,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : 5106408750719214967,
			),
			order : array(51),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -375260897492233324,
				access_hash : -8611642906547562065,
			),
			messages : array(10),
		),
		$client->updateStarGiftAuctionState(
			gift_id : 7427325254217230406,
			state : $client->starGiftAuctionState(
				version : 75,
				start_date : 4,
				end_date : 64,
				min_bid_amount : 2334266274040739773,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 5,
						amount : 323632167390548509,
						date : 61,
					),
				),
				top_bidders : array(2623909186295245611),
				next_round_at : 25,
				gifts_left : 30,
				current_round : 22,
				total_rounds : 91,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : 5782263238361461656,
			text : '6o3rdNa4LfzHQqgG',
		),
		$client->updateBotSubscriptionExpire(
			user_id : 947377757470466790,
			payload : 'V0u1vigprcFAjS49',
			until_date : 1,
			qts : 16,
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -2811591448958141588,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : -3383919615626280702,
				bid_date : 39,
				min_bid_amount : -5695562616366481436,
				peer : $client->peerUser(
					user_id : -593641659931246152,
				),
				acquired_count : 17,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 5713733002776933726,
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
			id : 494324836158323193,
			access_hash : 2540181522191987587,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 25,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'klT2KCbdJ19DUg4s',
					reason : 'zom6i8vs7RyjNHkK',
					text : 'JETDbFfgAQz5oBlV',
				),
			),
			bot_inline_placeholder : 'WVBLIaMcZoGznlmr',
			lang_code : 'mzAas5It4oLnfqXG',
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
				max_id : 25,
			),
			color : $client->peerColor(
				color : 42,
				background_emoji_id : 469647009112494471,
			),
			profile_color : $client->peerColor(
				color : 85,
				background_emoji_id : -6217740048860367646,
			),
			bot_active_users : 49,
			bot_verification_icon : 8516010438476446567,
			send_paid_messages_stars : -117613862922045064,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -329637595297797308,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8234627108149426353,
			title : '7W1SOytHBPMhe8Xo',
			photo : $client->chatPhotoEmpty(),
			participants_count : 38,
			date : 10,
			version : 30,
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
				until_date : 71,
			),
		),
		$client->chatForbidden(
			id : 318953587957828,
			title : 'hfognrXYQAGDZ2MP',
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
			id : 998466192654483090,
			access_hash : 6959532884506500323,
			title : 'TfnmsLua4gk9WqvK',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'SAmvifIwUMlY1038',
					reason : 'HEDo4j8RdCxMJQGm',
					text : 'lEOQTqYySIJ9LDxU',
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
				until_date : 66,
			),
			participants_count : 73,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 33,
			),
			color : $client->peerColor(
				color : 20,
				background_emoji_id : -7671491770124555852,
			),
			profile_color : $client->peerColor(
				color : 56,
				background_emoji_id : -781760297106652994,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 90,
			subscription_until_date : 45,
			bot_verification_icon : 7854587510639677613,
			send_paid_messages_stars : -4396056339208109330,
			linked_monoforum_id : -7794158479994529899,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -3867038032903242050,
			access_hash : 2686611132662999392,
			title : '5QDjNOkT8hWcrfgJ',
			until_date : 94,
		),
	),
	date : 58,
	seq_start : 24,
	seq : 55,
);
```