# updates

**Description** : *Full constructor of updates*

**Layer** : 218

```tl
updates#74ae4240 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq</mark> | [`int`](type/int) | Total number of sent updates |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updates(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 67,
				peer_id : $client->peerUser(
					user_id : 6557524877602796280,
				),
			),
			pts : 42,
			pts_count : 49,
		),
		$client->updateMessageID(
			id : 27,
			random_id : 7074861645105743954,
		),
		$client->updateDeleteMessages(
			messages : array(11),
			pts : 50,
			pts_count : 84,
		),
		$client->updateUserTyping(
			user_id : -7117513692292465121,
			top_msg_id : 98,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -534895828175819838,
			from_id : $client->peerUser(
				user_id : 3907003589100753827,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -1305067295132376325,
				self_participant : $client->chatParticipant(
					user_id : 8976184381095296922,
					inviter_id : -8626917934490293677,
					date : 4,
				),
			),
		),
		$client->updateUserStatus(
			user_id : 2983840322172449868,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -7665542834255113691,
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
			date : 58,
			device : 'CD6pXgsAoSeMPw7N',
			location : 'Olpsukwi2PbSHzZh',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 3531613086390244815,
				chat_id : 47,
				date : 49,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 55,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 59,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 23,
			),
			date : 79,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 48,
			max_date : 75,
			date : 11,
		),
		$client->updateChatParticipantAdd(
			chat_id : 3872794080064015320,
			user_id : 8249574683892858026,
			inviter_id : 6721051306763738919,
			date : 9,
			version : 90,
		),
		$client->updateChatParticipantDelete(
			chat_id : -9138135197820632526,
			user_id : 3173812489598293489,
			version : 85,
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
					id : 62,
					ip_address : '127.0.0.1',
					port : 9,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : 3373072241723111066,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : false,
				mute_until : 19,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : false,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 50,
			type : 'wlF9Tv5m46U2bkZf',
			message : 'xRiv7TpjuC08ELG2',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 78,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 60,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 52,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 78,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 64,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 80,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 25,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 53,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 58,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 56,
					language : '61h5TnaDSiPlGeqE',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 75,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 89,
					user_id : 8806707402022835995,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 87,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 68,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 7,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 1,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 46,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 12,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 84,
					document_id : 4521423694201623540,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 2,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(7388126362389501245),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(6966092576271838200),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-7588500534449206542),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-335980516116743477),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -3722042832420241203,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 91,
			peer : $client->peerUser(
				user_id : -7804602794474330627,
			),
			top_msg_id : 91,
			max_id : 88,
			still_unread_count : 53,
			pts : 66,
			pts_count : 86,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -2431128136027461068,
			),
			max_id : 79,
			pts : 32,
			pts_count : 45,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -5273916214258563530,
				url : 'https://docs.liveproto.dev',
			),
			pts : 9,
			pts_count : 54,
		),
		$client->updateReadMessagesContents(
			messages : array(95),
			pts : 35,
			pts_count : 80,
			date : 86,
		),
		$client->updateChannelTooLong(
			channel_id : -1282635107834835435,
			pts : 20,
		),
		$client->updateChannel(
			channel_id : -2470316537551764231,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 44,
				peer_id : $client->peerUser(
					user_id : 8292100559288967386,
				),
			),
			pts : 95,
			pts_count : 31,
		),
		$client->updateReadChannelInbox(
			folder_id : 29,
			channel_id : -8109950932797375462,
			max_id : 52,
			still_unread_count : 82,
			pts : 39,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -5227260374887428883,
			messages : array(82),
			pts : 74,
			pts_count : 12,
		),
		$client->updateChannelMessageViews(
			channel_id : -3674154264812148748,
			id : 72,
			views : 62,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 7159990177740761669,
			user_id : -959287505979175413,
			is_admin : false,
			version : 40,
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
					installed_date : 72,
					id : 3846151453277516857,
					access_hash : 217863011312780615,
					title : 'VUNWacuyjz8lknrd',
					short_name : '1Y9LE4oSOtazUnvu',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 31,
					thumb_version : 47,
					thumb_document_id : 2167311389032440723,
					count : 93,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'jOyqxQTGl0Wwnp6Y',
						documents : array(4123630758822987065),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -1146879021856917324,
						keyword : array('MtznF1yWlCDjwrBS'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -2393263709854679149,
					),
					$client->document(
						id : -2976600522983844768,
						access_hash : 863059984422002647,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 10,
						mime_type : 'u0wRnpTNAeclSGvg',
						size : -2469223855084194675,
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
						dc_id : 82,
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
			order : array(5929655093625779752),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 2301334719415599362,
			user_id : -8099962862078334246,
			query : 'flK7dLoPIVJBc8bx',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'BcSUj5N7nt3FTrKC',
		),
		$client->updateBotInlineSend(
			user_id : 8225133975146446953,
			query : 'sfJrgbSW1Pu8KeOj',
			geo : $client->geoPointEmpty(),
			id : 'ilGRXO5yAEHc86ZM',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 45,
				id : 1491074845087084741,
				access_hash : -4101972582377566028,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 4,
				peer_id : $client->peerUser(
					user_id : 8563087661532087013,
				),
			),
			pts : 18,
			pts_count : 35,
		),
		$client->updateBotCallbackQuery(
			query_id : 2653818386239367347,
			user_id : -4145984228994122448,
			peer : $client->peerUser(
				user_id : -5323666730305263685,
			),
			msg_id : 40,
			chat_instance : -6938108824391384983,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'tRsXWLBPJlhKp0OT',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 44,
				peer_id : $client->peerUser(
					user_id : -3964543801763041924,
				),
			),
			pts : 35,
			pts_count : 11,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : -8626604620020706485,
			user_id : 1069184444599758907,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 56,
				id : -4929362212773864295,
				access_hash : -3326829854753631020,
			),
			chat_instance : 6710551441164267074,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'PHpLDt8e0UryTYxh',
		),
		$client->updateReadChannelOutbox(
			channel_id : -7398896243903144642,
			max_id : 24,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 4357634241820588819,
			),
			top_msg_id : 46,
			saved_peer_id : $client->peerUser(
				user_id : 4753205826132987004,
			),
			draft : $client->draftMessageEmpty(
				date : 48,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 1354890586486293081,
			webpage : $client->webPageEmpty(
				id : 5078516044737355021,
				url : 'https://docs.liveproto.dev',
			),
			pts : 24,
			pts_count : 95,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 24,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 6597684226436584333,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 21,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -6384755053194624793,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 58,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'fvz1t2FXbkKWOJYl',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 106206127640739773,
			data : $client->dataJSON(
				data : 'twScoZpPUx1D67l0',
			),
			timeout : 25,
		),
		$client->updateBotShippingQuery(
			query_id : 4785634553371856413,
			user_id : -2686689665378418251,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'rwbjPuN1QaAI9vVm',
				street_line2 : 'HmLc7gMRVNe2xShz',
				city : 'jLfv7r5nE3luN4mB',
				state : 'zBUkm4t50xI1HJ8C',
				country_iso2 : 'hMWnStvlIOLZrXY9',
				post_code : 'FBHVRK2WTPluec3o',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 2884888526502327053,
			user_id : 1781147777686615405,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'ensqQr6VkvS7tz9g',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'owtT4uRPlNpJrZ91',
					street_line2 : 'YgEaxWHmK2R3dMCV',
					city : '1nYzNEWuVyAMRxwC',
					state : 'MtjvlE7Yeg3LK1x6',
					country_iso2 : 'CxYAi2Tow7KpPEDd',
					post_code : 'mOpSY19HeLwcBovA',
				),
			),
			shipping_option_id : 'T6Jwe491v7ZNRLIq',
			currency : 'j8MkI0OinFtHQSv5',
			total_amount : -1239217254824990065,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -2787453105348889202,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'g3fMais0PbZhdpTu',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'ONQPCudM2AJnFBkt',
				from_version : 70,
				version : 37,
				strings : array(
					$client->langPackString(
						key : 'FaJdgZDVP0yqIiMn',
						value : 'dpGqygoM4RvIlNVe',
					),
					$client->langPackStringPluralized(
						key : 'fnZdX8Wt29O7vU6N',
						zero_value : 'MRQN8A7CavWOD9Y3',
						one_value : 'InMdsv5BrGpNfZx9',
						two_value : '1R4rWokwgjMGLBJq',
						few_value : 'LXROtYicA8Nf59So',
						many_value : 'CV0imNAU4EX9xeoB',
						other_value : 'OBX6nvoEwGkL9YC0',
					),
					$client->langPackStringDeleted(
						key : '65Whryf1goBPKsu8',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -3966246815759077865,
			top_msg_id : 42,
			saved_peer_id : $client->peerUser(
				user_id : -7784592112948935891,
			),
			messages : array(25),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -7918258014436643728,
			available_min_id : 48,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -4130772155167502220,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : -3641439914404260369,
			),
		),
		$client->updateMessagePoll(
			poll_id : -1741520252984337017,
			poll : $client->poll(
				id : -4088963403548709761,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'GEzlYXny0QrB7abW',
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
				close_period : 82,
				close_date : 42,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 94,
					),
				),
				total_voters : 57,
				recent_voters : array(
					$client->peerUser(
						user_id : 741197309595033031,
					),
					$client->peerChat(
						chat_id : 8094656268036532809,
					),
					$client->peerChannel(
						channel_id : 7896460016139009082,
					),
				),
				solution : 'WU20hFzbSTvBoZAX',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 43,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 47,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 99,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 61,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 3,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 81,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 19,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 30,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 6,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 46,
						language : '2rtumgVkAOZ5xX8f',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 74,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 28,
						user_id : -8337853516568937875,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 9,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 95,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 40,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 71,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 82,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 0,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 60,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 59,
						document_id : 6140352312052200767,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 31,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 5543797485155396985,
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
				until_date : 2,
			),
			version : 85,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : -8373338049333176461,
					),
					folder_id : 94,
				),
			),
			pts : 82,
			pts_count : 16,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -3041071418548795633,
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
				geo_distance : 42,
				request_chat_title : '0JY2WGHS1nId4qBN',
				request_chat_date : 49,
				business_bot_id : -5209798271505962314,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -6769993373955850156,
				registration_month : 'f3pO1H5X2duWYMIQ',
				phone_country : '+1234567890',
				name_change_date : 22,
				photo_change_date : 98,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : 1777967063357507049,
					),
					expires : 42,
					distance : 84,
				),
				$client->peerSelfLocated(
					expires : 32,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 23,
				peer_id : $client->peerUser(
					user_id : 2753897587234408633,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 4202794733806792089,
			),
			messages : array(68),
			sent_messages : array(47),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 7452023094440388480,
				access_hash : 913817122996617345,
				slug : 'uKcSD0FlwC1WmAVI',
				title : 'MXxhsNiQZFqHt8Dv',
				document : $client->documentEmpty(
					id : -1349835761830406046,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 38,
						outbox_accent_color : 89,
						message_colors : array(77),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : '7UPIkQ2yruGCoeLw',
				installs_count : 63,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : 4149783980296486357,
			),
			msg_id : 73,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 1866264314782037722,
			peer : $client->peerUser(
				user_id : -8871624373980409635,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 84,
		),
		$client->updateDialogFilter(
			id : 62,
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
				id : 1,
				title : $client->textWithEntities(
					text : 'G5794hpj0vJYaU1M',
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
				emoticon : 'Em5DPuCYUtsBOJ6h',
				color : 86,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(95),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : 3678177748566550229,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 6510615070173323199,
			id : 24,
			forwards : 23,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 5179657167125124969,
			top_msg_id : 67,
			read_max_id : 88,
			broadcast_id : 2018972907622302885,
			broadcast_post : 14,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -2723301162564118236,
			top_msg_id : 76,
			read_max_id : 82,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 7471781167661417397,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : 652974708184300438,
			top_msg_id : 10,
			from_id : $client->peerUser(
				user_id : -1121010347819390307,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -996599817507218229,
			),
			messages : array(45),
			pts : 7,
			pts_count : 56,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -8977884707016545607,
			messages : array(52),
			pts : 38,
			pts_count : 43,
		),
		$client->updateChat(
			chat_id : 3661967257768212177,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 2688640644566988200,
				access_hash : -2106622239875034798,
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
						user_id : 2648711237624731422,
					),
					date : 54,
					active_date : 82,
					source : 91,
					volume : 57,
					about : 'fbUDVdjcXCP9IG2K',
					raise_hand_rating : 5394436065177887293,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'OJtvijIo6W7EAblc',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 63,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : '9qi1eTyKcDNzWv3f',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 47,
					),
					paid_stars_total : 6016656652762662883,
				),
			),
			version : 40,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : -6765712076122247979,
			),
			call : $client->groupCallDiscarded(
				id : 3180298702151269133,
				access_hash : -2018298640005180591,
				duration : 81,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 7535292435913923273,
			),
			ttl_period : 90,
		),
		$client->updateChatParticipant(
			chat_id : 73391514646119475,
			date : 25,
			actor_id : 3437423116225400822,
			user_id : 2961485666805111908,
			prev_participant : $client->chatParticipant(
				user_id : -4688178258332545068,
				inviter_id : 5551718732240767805,
				date : 46,
			),
			new_participant : $client->chatParticipant(
				user_id : 448669506758459692,
				inviter_id : -8358169456021270052,
				date : 97,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'B1zuvOCUyGMNrAXD',
				admin_id : 6681372291519316795,
				date : 56,
				start_date : 46,
				expire_date : 99,
				usage_limit : 56,
				usage : 93,
				requested : 35,
				subscription_expired : 65,
				title : 'wqsdkTAtyPl83X7B',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 24,
					amount : -2755340543170928189,
				),
			),
			qts : 25,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -2740680797526752031,
			date : 98,
			actor_id : 2911163744898669530,
			user_id : 4785886426166792238,
			prev_participant : $client->channelParticipant(
				user_id : -5582675270325941058,
				date : 72,
				subscription_until_date : 10,
			),
			new_participant : $client->channelParticipant(
				user_id : -5405697620223534395,
				date : 87,
				subscription_until_date : 25,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'nbwIe25D0AszNRmc',
				admin_id : -7450740882076975079,
				date : 76,
				start_date : 77,
				expire_date : 10,
				usage_limit : 92,
				usage : 65,
				requested : 11,
				subscription_expired : 38,
				title : '0q9Kcb6YjtxFrPQT',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 42,
					amount : 4664974133423177626,
				),
			),
			qts : 87,
		),
		$client->updateBotStopped(
			user_id : 7849902797214816706,
			date : 37,
			stopped : false,
			qts : 34,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'sLP3AEyvUKeIY7zX',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 1861266149399266649,
			),
			bot_id : 6678671940659338547,
			commands : array(
				$client->botCommand(
					command : 'wsibRVz32lFNeBIX',
					description : '6zXtDgnVQp85N0W1',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 8101384194650770325,
			),
			requests_pending : 24,
			recent_requesters : array(3322548300170221262),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -5522240456018147041,
			),
			date : 76,
			user_id : -3041095099252079850,
			about : 'wMLDX7JFI9hoVjpU',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'MfRqAKOaisGhTZ6p',
				admin_id : 4749049798372871239,
				date : 13,
				start_date : 20,
				expire_date : 8,
				usage_limit : 97,
				usage : 31,
				requested : 39,
				subscription_expired : 50,
				title : '105HhbFw9WaIdRli',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 73,
					amount : 4590009512376456634,
				),
			),
			qts : 33,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 4912793818000887502,
			),
			msg_id : 46,
			top_msg_id : 32,
			saved_peer_id : $client->peerUser(
				user_id : -1562422468535066050,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 91,
						reaction : $client->reactionEmpty(...),
						count : 71,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 58,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 83,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 4652014934679687545,
		),
		$client->updateBotMenuButton(
			bot_id : -8565189895328304199,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -8248718530106499528,
			),
			msg_id : 86,
			transcription_id : -1019204227658706725,
			text : '6KSzn0b12xvuMDfh',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 658146804584172221,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -7868873302950842568,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -6747625758816517022,
			),
			msg_id : 1,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 32,
					h : 12,
					thumb : $client->photoSizeEmpty(
						type : 'HhySGqVPlLicXsMN',
					),
					video_duration : 91,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : 5046731005461665916,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 141186190313917631,
			),
			story : $client->storyItemDeleted(
				id : 11,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 4895112560898217512,
			),
			max_id : 72,
		),
		$client->updateStoryID(
			id : 99,
			random_id : 2346237934653927112,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 47,
				cooldown_until_date : 31,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : 8146448066517208116,
			),
			story_id : 8,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 2084886361123102048,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : '2CTWAUk6y8hjDflG',
				user_id : -9174251002200605509,
				giveaway_msg_id : 37,
				date : 76,
				expires : 77,
				used_gift_slug : '9TvMJRHKmuQeshEZ',
				multiplier : 13,
				stars : 805907350472265134,
			),
			qts : 66,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : 596899161232063858,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 3676375025642597345,
			),
			wallpaper : $client->wallPaper(
				id : 4380737151509759977,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 903515276401471172,
				slug : 'EXHyFtWohnrSgbq5',
				document : $client->documentEmpty(
					id : -8129970697888696557,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 35,
					second_background_color : 86,
					third_background_color : 91,
					fourth_background_color : 24,
					intensity : 70,
					rotation : 88,
					emoticon : '0h3xeWJDoflUinGR',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 7763890649488613256,
			),
			msg_id : 16,
			date : 79,
			actor : $client->peerUser(
				user_id : -369126432123984958,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'Xtfb7YUSHeTO41dN',
				),
				$client->reactionCustomEmoji(
					document_id : -4702709915054121430,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'vtPR37SxBYNefQjV',
				),
				$client->reactionCustomEmoji(
					document_id : 2461711195056429393,
				),
				$client->reactionPaid(),
			),
			qts : 96,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -904866495036662951,
			),
			msg_id : 25,
			date : 49,
			reactions : array(
				$client->reactionCount(
					chosen_order : 68,
					reaction : $client->reactionEmpty(),
					count : 21,
				),
			),
			qts : 12,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 139695203610240279,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -1370097331641904664,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 74,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'T7Fe0bcJyhiuVGSw',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 1,
					shortcut : 'Obf8R6HTxPMD5lWk',
					top_message : 78,
					count : 28,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 46,
				shortcut : '0MzArD4OY6wj9NVJ',
				top_message : 79,
				count : 32,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 52,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 50,
				peer_id : $client->peerUser(
					user_id : 4372928569745736716,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 21,
			messages : array(8),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'Jbe80g7luy4DmorW',
				user_id : -5151554068187884031,
				dc_id : 58,
				date : 41,
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
			qts : 19,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'E4Za0t9inGmS62RK',
			message : $client->messageEmpty(
				id : 77,
				peer_id : $client->peerUser(
					user_id : 247501875870550889,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 99,
				peer_id : $client->peerUser(
					user_id : -6897661985801604440,
				),
			),
			qts : 26,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'We1KhcCY9MtBdiAu',
			message : $client->messageEmpty(
				id : 50,
				peer_id : $client->peerUser(
					user_id : -5577522467952568457,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 72,
				peer_id : $client->peerUser(
					user_id : -3934261223267338092,
				),
			),
			qts : 96,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'hAJkumQypS10bCdx',
			peer : $client->peerUser(
				user_id : -6808766728276613610,
			),
			messages : array(15),
			qts : 51,
		),
		$client->updateNewStoryReaction(
			story_id : 86,
			peer : $client->peerUser(
				user_id : -261606675771173286,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : -5169266504479991561,
				nanos : 0,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -4472085794250149565,
			user_id : -1101302553796134444,
			connection_id : 'kdBCpimQ7XOI0Vut',
			message : $client->messageEmpty(
				id : 0,
				peer_id : $client->peerUser(
					user_id : 6294964232337427679,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 93,
				peer_id : $client->peerUser(
					user_id : 3992105943699264424,
				),
			),
			chat_instance : -2577619603266675569,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -3842109517476123417,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : -8781617035901796700,
					nanos : 16,
				),
				available_balance : $client->starsAmount(
					amount : 791822317324444282,
					nanos : 58,
				),
				overall_revenue : $client->starsAmount(
					amount : -2469546384933503281,
					nanos : 6,
				),
				next_withdrawal_at : 80,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -3970195484118115032,
			payload : 'pMmAxwriqCcJTWU0',
			qts : 6,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 65,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 80,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 8827381521976838788,
				access_hash : -5773941874579758458,
			),
			sub_chain_id : 61,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 21,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 2737413415721932740,
			saved_peer_id : $client->peerUser(
				user_id : 7903396611136846205,
			),
			read_max_id : 88,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -2358952736340759546,
			saved_peer_id : $client->peerUser(
				user_id : 413470252633613870,
			),
			read_max_id : 1,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : -363821993727558029,
			saved_peer_id : $client->peerUser(
				user_id : 3808300710854203404,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 6621137152313029661,
				access_hash : 7079553237095590547,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 68,
				from_id : $client->peerUser(
					user_id : 8093666722798997957,
				),
				date : 88,
				message : $client->textWithEntities(
					text : 'toDQFN1h7vCsBaIm',
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
				paid_message_stars : 9015338360175372824,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 3069164718511260868,
				access_hash : -7031312567339369036,
			),
			from_id : $client->peerUser(
				user_id : 8843352145383840686,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 7183520732632956027,
			),
			topic_id : 1,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -9034733958560611252,
			),
			order : array(78),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : -8313070157463654942,
				access_hash : 4078530257706814402,
			),
			messages : array(2),
		),
		$client->updateStarGiftAuctionState(
			gift_id : 3640781030295563810,
			state : $client->starGiftAuctionState(
				version : 73,
				start_date : 23,
				end_date : 43,
				min_bid_amount : -3395287142829933773,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 73,
						amount : 776534344170740473,
						date : 18,
					),
				),
				top_bidders : array(4011352794405944207),
				next_round_at : 95,
				gifts_left : 25,
				current_round : 60,
				total_rounds : 50,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -6427914010603757902,
			text : '4ga3uq0t5FnKZjWs',
		),
		$client->updateBotSubscriptionExpire(
			user_id : -1743067533538757920,
			payload : 'KqfO8XzG5eWIVbHm',
			until_date : 43,
			qts : 70,
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -4578078260382791268,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 4300705495755358615,
				bid_date : 97,
				min_bid_amount : 5294773844722859983,
				peer : $client->peerUser(
					user_id : 9182488753604713698,
				),
				acquired_count : 53,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 4058091816860636307,
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
			id : -3429315083403487701,
			access_hash : 83642725790126578,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 31,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'GgJFzWkpejyOQiRD',
					reason : 'rbIBlq0a5meyJv29',
					text : 'gw79Vym1FMhGJYNW',
				),
			),
			bot_inline_placeholder : 'n0q1Pa4yhBzfg2j5',
			lang_code : 'Ul3ve92nuqbosEAT',
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
				max_id : 29,
			),
			color : $client->peerColor(
				color : 27,
				background_emoji_id : -955826203936763650,
			),
			profile_color : $client->peerColor(
				color : 53,
				background_emoji_id : -7295519431431921159,
			),
			bot_active_users : 59,
			bot_verification_icon : -7585412058884965392,
			send_paid_messages_stars : 3254878301191231505,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6965413508604017478,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4858149158465423732,
			title : 'ZPoWyqNY1wklrz9M',
			photo : $client->chatPhotoEmpty(),
			participants_count : 77,
			date : 37,
			version : 96,
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
				until_date : 100,
			),
		),
		$client->chatForbidden(
			id : 4581501161639674937,
			title : 'XnL1gudqalsOSjUB',
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
			id : -5660615362849994481,
			access_hash : -8545369876583602466,
			title : 'JTlwzOeGPYu78d0a',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 38,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lBjvrmS6qc0g5Uup',
					reason : 'yB2pbc5CqKRU08w4',
					text : '5XRmUOYrhvJHinQ8',
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
				until_date : 94,
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
			participants_count : 40,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 35,
			),
			color : $client->peerColor(
				color : 73,
				background_emoji_id : 2772262309415479115,
			),
			profile_color : $client->peerColor(
				color : 5,
				background_emoji_id : -2452238163689131745,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 100,
			subscription_until_date : 18,
			bot_verification_icon : -3189736438349452272,
			send_paid_messages_stars : 6324788209333523966,
			linked_monoforum_id : 4837693687511257935,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 6294125637904302781,
			access_hash : -1909918267415623182,
			title : 'YpVzLJr96IdmXh14',
			until_date : 10,
		),
	),
	date : 78,
	seq : 79,
);
```